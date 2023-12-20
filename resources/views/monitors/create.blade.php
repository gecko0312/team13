@extends('app')
@section('title', '建立產品表單')
@section('m_theme', '建立產品的表單')
@section('monitor_contents')
@include('message.list')
    {!! Form::open(['url' => 'monitors/store']) !!}
    @include('monitors.form', ['submitButtonText'=>"新增產品資料"])
    {!! Form::close() !!}
@endsection