@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="form">
                      @csrf
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label form-control-label">サービス名</label>
                        <div class="col-md-9">
                          <input id="search" name="name" class="form-control" type="text" value="{{ old("name") }}">
                          @if ($errors->has('name'))
                            <div>{{$errors->first('name') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">料金</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                          @if ($errors->has('price'))
                            <div>{{$errors->first('price') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                          <input type="submit" value="登録">
                        </div>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
