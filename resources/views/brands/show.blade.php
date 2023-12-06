@extends('app')

@section('title','找廠商')

@section('brands','找廠商資料')

@section('monitor_contents')
編號:{{$brands->id}}<br/>	

名稱:{{$brands->bname}}<br/>	

地區:{{$brands->location}}<br/>	

成立時間:{{$brands->brand_time}}<br/>	

@endsection
