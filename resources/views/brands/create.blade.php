@extends('app')

@section('title','電腦螢幕查詢網站 - 新增廠牌資料')

@section('monitor_contents')
    <h1>新增廠牌資料</h1>
    @include('message.list')
    {!! Form::open(['url'=>'brands/store']) !!}
        @include('brands.form',['submitButtonText'=>"新增廠牌資料"])
    {!! Form::close() !!}
@endsection

