@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="form">
                      @csrf
                      <input type="hidden" name="user_id" value="{{ $id }}">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label form-control-label">サービス名</label>
                        <div class="col-md-9">
                          <input name="name" class="form-control" type="text" value="">
                          @if ($errors->has('name'))
                            <div>{{$errors->first('name') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">料金</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="text" name="price">
                          @if ($errors->has('price'))
                            <div>{{$errors->first('price') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">プラン</label>
                        <div class="col-lg-9">
                          <select class="form-control" name="plan">
                            <option value="月額">月額</option>
                            <option value="年額">年額</option>
                          </select>
                          @if ($errors->has('plan'))
                            <div>{{$errors->first('plan') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">請求日</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="date" name="billing_date">
                          @if ($errors->has('billing_date'))
                            <div>{{$errors->first('billing_date') }}</div>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">お知らせ日</label>
                        <div class="col-lg-9">
                          <input class="form-control" type="date" name="info_date">
                          @if ($errors->has('info_date'))
                            <div>{{$errors->first('info_date') }}</div>
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
