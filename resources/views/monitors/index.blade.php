@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有電腦螢幕資訊')

@section('monitor_contents')
        <h1>顯示所有電腦螢幕資訊</h1>
        <table>
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
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            @foreach($monitors as $monitor)
                <tr>
                    <td>{{ $monitor->id }}</td>
                    <td>{{ $monitor->product_model }}</td>
                    <td>{{ $monitor->bname }}</td>
                    <td>{{ $monitor->size }}</td>
                    <td>{{ $monitor->nits }}</td>
                    <td>{{ $monitor->hz }}</td>
                    <td>{{ $monitor->panel }}</td>
                    <td>{{ $monitor->speaker }}</td>
                    <td>{{ $monitor->resolution }}</td>
                    <td>{{ $monitor->price }}</td>
                    <td><a href="{{ route('monitors.edit',['id'=>$monitor->id]) }}">編輯</a></td>
                    <td><a href="{{ route('monitors.show',['id'=>$monitor->id]) }}">顯示</a></td>
                    <td>
                        <form action="{{ url('monitors/delete',['id'=> $monitor->id]) }}"  mehod="post">
                            <input class="btn btn-default" type="submit" value="刪除" />
                            @mehod('delete')
                            @csrf
                        </from>
                    </td> 
                </tr>
            @endforeach
        </table>

 @endsection