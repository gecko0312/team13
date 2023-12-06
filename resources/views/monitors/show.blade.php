@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有電腦螢幕資訊')

@section('monitor_contents')
    <h1>顯示所有電腦螢幕資訊</h1>
    編號：{{ $monitor->id }}<br/>
    產品型號：{{ $monitor->product_model }}<br/>
    廠牌：{{ $monitor->bid }}<br/>
    尺寸：{{ $monitor->size }}<br/>
    亮度：{{ $monitor->nits }}<br/>
    更新率：{{ $monitor->hz }}<br/>
    面板：{{ $monitor->panel }}<br/>
    喇叭：{{ $monitor->speaker }}<br/>
    解析度：{{ $monitor->resolution }}<br/>
    價錢：{{ $monitor->price }}<br/>

 @endsection