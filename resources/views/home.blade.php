@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::check())
            <div class="card">
                <div class="card-header">サブスクリプションの管理をしよう</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('service.create') }}" class="">
                                    サービス登録ページ
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('services.index') }}" class="">
                                    サービス一覧ページ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">サブスクリプションの管理をしよう</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ route('register') }}" class="">
                                    新規登録
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('login') }}" class="">
                                    ログイン
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
