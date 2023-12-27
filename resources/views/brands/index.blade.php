
@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有廠牌資訊')

@section('monitor_contents')
        <h1>顯示所有廠牌資訊</h1>
        <table width=100% class="brand_table">
            <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>地區</th>
                <th>成立時間</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            @foreach($brands as $brand)
                <tr>
                   <td>{{ $brand->id }}</td>
                    <td>{{ $brand->bname }}</td>
                    <td>{{ $brand->location }}</td>
                    <td>{{ $brand->brand_time }}</td>
                    <td><a href="{{ route('brands.show',['id'=>$brand->id ]) }}">顯示</a></td>
                    <td><a href="{{ route('brands.edit',['id'=>$brand->id ]) }}">修改</a></td>
                    <td>                   
                     <form action="{{url('/brands/delete',['id'=>$brand->id])}}"method="post">
                        <input class="btn btn-default" type="submit" value="刪除"/>
                        @method('delete')
                        @csrf
                        </form>
                    </td>


                </tr>
                @endforeach
        </table>
        <style>
            .brand_table{
                text-align:center
            }
        </style>
@endsection
    