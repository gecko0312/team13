@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所選廠牌資訊')

@section('monitor_contents')
<h1> 顯示所選廠牌資訊 </h1>
<div>編號：{{ $brand->id }}</div>
<div>名稱：{{ $brand->bname }}</div>
<div>地區：{{ $brand->location }}</div>
<div>成立時間：{{ $brand->brand_time }}</div> 

<h1>{{ $brand->bname }}所有電腦螢幕資訊</h1>
<table width=100% class="monitor_table">
    <tr>
        <th>編號</th>
        <th>產品型號</th>
        <th>廠牌</th>
        <th>尺寸</th>
        <th>亮度</th>
        <th>更新率</th>
        <th>面板</th>
        <th>喇叭</th>
        <th>解析度</th>
        <th>價錢</th>
    </tr>
    @foreach($monitors as $monitor)
        <tr>
            <td >{{ $monitor->id }}</td>
            <td>{{ $monitor->product_model }}</td>
            <td>{{ $monitor->brand->bname }}</td>
            <td>{{ $monitor->size }}</td>
            <td>{{ $monitor->nits }}</td>
            <td>{{ $monitor->hz }}</td>
            <td>{{ $monitor->panel }}</td>
            <td>{{ $monitor->speaker }}</td>
            <td>{{ $monitor->resolution }}</td>
            <td>{{ $monitor->price }}</td>
        </tr>
    @endforeach
</table>
<style>
    .monitor_table{
        text-align:center
    }
</style>
@endsection