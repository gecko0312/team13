@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所選電腦螢幕資訊')

@section('monitor_contents')
<h1>顯示所選螢幕資訊</h1>
<div>編號：{{ $monitor->id }}</div>
<div>產品型號：{{ $monitor->product_model }}</div>
<div>廠牌：{{ $monitor->bid }}</div>
<div>尺寸：{{ $monitor->size }}</div>
<div>亮度：{{ $monitor->nits }}</div>
<div>更新率：{{ $monitor->hz }}</div>
<div>面板：{{ $monitor->panel }}</div>
<div>喇叭：{{ $monitor->speaker }}</div>
<div>解析度：{{ $monitor->resolution }}</div>
<div>價錢：{{ $monitor->price }}</div>
@endsection