@extends('app')
@section('title', '建立廠商表單')
@section('m_theme', '建立廠商的表單')
@section('monitor_contents')
@include('message.list')
    {!! Form::open(['url' => 'brands/store']) !!}
    @include('brands.form', ['submitButtonText'=>'新增廠商資料'])
    {!! Form::close() !!}
@endsection