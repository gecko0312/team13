@extends('app')

@section('title','電腦螢幕查詢網站 - 編輯廠牌資料')

@section('monitor_contents')

    <h1>編輯所選廠牌資料</h1>
    @include('message.list')
    {!! Form::model($brand ,['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BrandsController@update',$brand->id]]) !!}
        @include('brands.form',['submitButtonText'=>"更新廠牌資料"])
    {!! Form::close() !!}
@endsection


