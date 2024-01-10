@extends('app')

@section('title','電腦螢幕查詢網站 - 編輯螢幕資料')

@section('monitor_contents')

    <h1>編輯所選螢幕資料</h1>
    @include('message.list')
    {!! Form::model($monitor ,['method'=>'PATCH', 'action'=>['\App\Http\Controllers\MonitorsController@update',$monitor->id]]) !!}
        @include('monitors.form',['submitButtonText'=>"更新螢幕資料"])
    {!! Form::close() !!}
@endsection


