
@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有廠牌資訊')

@section('monitor_contents')
        <h1>顯示所有廠牌資訊</h1>
        <table>
            <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>地區</th>
                <th>成立時間</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            @for($i=0; $i<count($brands); $i++)
                <tr>
                    <td>{{ $brands[$i]['id'] }}</td>
                    <td>{{ $brands[$i]['bname'] }}</td>
                    <td>{{ $brands[$i]['location'] }}</td>
                    <td>{{ $brands[$i]['brand_time'] }}</td>
                    <td><a href="{{ route('brands.show',['id'=>$brands[$i]['id']]) }}">顯示</a></td>
                    <td><a href="{{ route('brands.edit',['id'=>$brands[$i]['id']]) }}">修改</a></td>
                    <td>刪除</td>
                </tr>
            @endfor
        </table>
@endsection
    