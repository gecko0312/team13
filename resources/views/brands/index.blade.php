
@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有廠牌資訊')

@section('monitor_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('brands.create') }}"> 新增廠牌資料</a>
        <br/>
        <a href="{{ route('brands.over_fifty') }}">成立超過50年的廠牌資料</a>
        <form action="{{ url('brands/location') }}" method='POST'>
            {!! Form::label('loc','選取地區') !!}
            {!! Form::select('loc',$locations,['class'=>'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢"/>
            @csrf
        </form>
        </div>
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
        {{ $brands->withQueryString()->links() }}
                <style>
            .brand_table{
                text-align:center
            }
        </style>
@endsection
    