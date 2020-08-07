@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashbord</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @if (session('status'))
                            <li class="list-group-item">
                                {{ session('status') }}
                            </li>
                            @endif
                            You are logged in!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
