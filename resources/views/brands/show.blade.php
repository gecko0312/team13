@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有廠牌資訊')

@section('monitor_contents')
        <h1>顯示所有廠牌資訊</h1>
編號：{{ $brand->id }}<br/>
名稱：{{ $brand->bname }}<br/>
地區：{{ $brand->location }}<br/>
成立時間：{{ $brand->brand_time }}<br/>

@endsection
