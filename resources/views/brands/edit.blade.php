@extends('app')
@section('title', '編輯特定廠商')
@section('m_theme', '編輯中的廠商')
@section('monitor_contents')
    {!! Form::model($brands, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BrandsController@update', $brands->id]]) !!}
    @include('brands.form', ['submitButtonText'=>"更新螢幕資料"])
    {!! Form::close() !!}
@endsection