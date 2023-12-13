@extends('app')

@section('title','電腦螢幕查詢網站 - 新增螢幕資料')

@section('monitor_contents')
    <h1>新增螢幕資料</h1>
    {!! Form::open(['url'=>'monitors/store']) !!}
        @include('monitors.form',['submitButtonText'=>"新增螢幕資料"])
    {!! Form::close() !!}
@endsection

