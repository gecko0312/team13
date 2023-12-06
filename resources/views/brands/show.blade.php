@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所選廠牌資訊')

@section('monitor_contents')
<h1> 顯示所選廠牌資訊 </h1>
<div>編號：{{ $brand->id }}</div>
<div>名稱：{{ $brand->bname }}</div>
<div>地區：{{ $brand->location }}</div>
<div>成立時間：{{ $brand->brand_time }}</div> 
@endsection