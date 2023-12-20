@extends('app')
@section('title', '編輯特定螢幕')
@section('m_theme', '編輯中的螢幕')
@section('monitor_contents')
@include('message.list')
    {!! Form::model($monitor, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\MonitorsController@update', $monitor->id]]) !!}
    @include('monitors.form', ['submitButtonText'=>"更新螢幕資料"])
    {!! Form::close() !!}
@endsection