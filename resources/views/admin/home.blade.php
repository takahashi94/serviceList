@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Admin Dashbord</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($names as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>¥{{ number_format($item->price) }}</td>
                                    <th>
                                        <a href="{{ route('admin.name.edit', ['name_id' => $item->id]) }}">編集</a>
                                        <a href="{{ route('admin.name.delete', ['name_id' => $item->id]) }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('name_delete').submit();">
                                            削除
                                        </a>
                                        <form id="name_delete" action="{{ route('admin.name.delete', ['name_id' => $item->id]) }}" method="POST">
                                            @csrf
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $names->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
