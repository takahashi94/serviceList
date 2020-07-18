@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card text-white bg-primary mb-3" style="max-width: 100%">
          <div class="card-body">
            <p class="card-title">月額合計</p>
            <h5 class="card-text">¥1,000</h5>
          </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
          <div class="card-body">
            <p class="card-title">年間合計</p>
            <h5 class="card-text">¥10,000</h5>
          </div>
        </div>
      </div>
      <div class="card card-outline-secondary">
        <div class="card-header">サービス一覧</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">サービス名</th>
                <th scope="col">plan</th>
                <th scope="col">価格</th>
                <th scope="col">請求日</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
              <tr>
                <td scope="col">{{ $service->name }}</td>
                <td>{{ $service->plan }}</td>
                <td>{{ $service->price }}</td>
                <td>{{ $service->billing_date }}</td>
                <td>
                  <button class="btn btn-primary btn-sm">
                    <a href="{{ route('service.edit', ['service_id' => $service->id]) }}">編集</a>
                  </button>
                </td>
                <td>
                  <form action="{{ route('service.delete', ['service_id' => $service->id]) }}" method="post">
                    @csrf
                    <input type="submit" name="" value="削除" class="btn btn-danger btn-sm">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
