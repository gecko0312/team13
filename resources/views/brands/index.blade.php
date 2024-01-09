
@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有廠牌資訊')

@section('monitor_contents')
        <h1>顯示所有廠牌資訊</h1>
        
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        @can('admin')
            <a href="{{ route('brands.create') }}"> 新增廠牌資料</a>
        @endcan
        <br/>
        <a href="{{ route('brands.over_fifty') }}">成立超過50年的廠牌資料</a>
        <form action="{{ url('brands/location') }}" method='GET'>
            {!! Form::label('loc','選取地區') !!}
            {!! Form::select('loc',$locations,$selectedLocation,['class'=>'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢"/>
            @csrf
        </form>
        </div>

        <table width=100% class="brand_table">
            <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>地區</th>
                <th>成立時間</th>
                <th>操作1</th>
                @can('admin')
                    <th>操作2</th>
                    <th>操作3</th>
                @elsecan('manager')
                    <th>操作2</th>
                @endcan
            </tr>
            @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->bname }}</td>
                    <td>{{ $brand->location }}</td>
                    <td>{{ $brand->brand_time }}</td>
                    <td><a href="{{ route('brands.show',['id'=>$brand->id ]) }}">顯示</a></td>
                    @can('admin')
                        <td><a href="{{ route('brands.edit',['id'=>$brand->id ]) }}">編輯</a></td>
                        <td>
                            <form action="{{ url('/brands/delete', ['id'=>$brand->id]) }}" method='post'>
                                <input class="btn btn-default" type="submit" value="刪除"/>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    @elsecan('manager')
                        <td><a href="{{ route('brands.edit',['id'=>$brand->id ]) }}">編輯</a></td>
                    @endcan
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
    