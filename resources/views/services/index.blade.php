@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card-deck mb-5">
        <div class="card text-center bg-info">
          <div class="card-body">
            <div class="card-title">
              <h5>月額合計</h5>
            </div>
            <div class="card-text">
              <h2>¥{{ number_format($monthly_total) }}</h2>
            </div>
          </div>
        </div>
        <div class="card text-center bg-success">
          <div class="card-body">
            <div class="card-title">
              <h5>年額合計</h5>
            </div>
            <div class="card-text">
              <h2>¥{{ number_format($annual_total) }}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="list-group">
        <div class="list-group-item list-group-item-action flex-column align-items-start mb-3 border-light">
          <div class="d-flex w-100 justify-content-between">
            <h3 class="mb-1">サービス一覧</h3>
            <p class="mb-1">
              <a href="route{{ route('service.create') }}" class=""><i class="fas fa-plus-circle fa-fw fa-lg"></i>新規作成</a>
            </p>
          </div>
        </div>
      </div>
      <div class="list-group">
        @foreach ($services as $service)
        <div class="list-group-item list-group-item flex-column mb-3 border-top rounded">
          <div class="d-flex w-100 justify-content-between">
            <h3 class="mb-1">{{ $service->name }}</h3>
            <p>{{ $service->plan }} ¥{{ number_format($service->price) }}</p>
          </div>
          <div class="d-flex w-100 justify-content-between">
            <p class="pt-1">更新日: {{ $service->billing_date }}</p>
            <div>
            <a href="{{ route('service.edit', ['service_id' => $service->id]) }}" class=""><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>
            <a href="{{ route('service.delete', ['service_id' => $service->id]) }}"
              onclick="event.preventDefault();
                            document.getElementById('service_delete').submit();">
              <i class="fas fa-trash-restore fa-lg"></i>
            </a>
            <form id="service_delete" action="{{ route('service.delete', ['service_id' => $service->id]) }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
