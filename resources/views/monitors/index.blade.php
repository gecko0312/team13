@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有電腦螢幕資訊')

@section('monitor_contents')
        <h1>顯示所有電腦螢幕資訊</h1>
        <table>
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
            @for($i=0; $i<count($monitors); $i++)
                <tr>
                    <td>{{ $monitors[$i]['id'] }}</td>
                    <td>{{ $monitors[$i]['product_model'] }}</td>
                    <td>{{ $monitors[$i]['bid'] }}</td>
                    <td>{{ $monitors[$i]['size'] }}</td>
                    <td>{{ $monitors[$i]['nits'] }}</td>
                    <td>{{ $monitors[$i]['hz'] }}</td>
                    <td>{{ $monitors[$i]['panel'] }}</td>
                    <td>{{ $monitors[$i]['speaker'] }}</td>
                    <td>{{ $monitors[$i]['resolution'] }}</td>
                    <td>{{ $monitors[$i]['price'] }}</td>
                    <td><a href="{{ route('monitors.show',['id'=>$monitors[$i]['id']]) }}">顯示</a></td>
                    <td><a href="{{ route('monitors.edit',['id'=>$monitors[$i]['id']]) }}">編輯</a></td>
                    <td>刪除</td>
                </tr>
            @endfor
        </table>

 @endsection