@extends('app')

@section('title','電腦螢幕查詢網站 - 顯示所有電腦螢幕資訊')

@section('monitor_contents')

        <h1>顯示所有電腦螢幕資訊</h1>
        
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        @can('admin')
        <a href="{{ route('monitors.create') }}"> 新增螢幕資料</a>
        @endcan
        </br>
        <a href="{{ route('monitors.have_speaker') }}"> 有喇叭的螢幕資料</a>
        <form action="{{ url('monitors/panel') }}" method='GET'>
            {!! Form::label('pan','選取面板') !!}
            {!! Form::select('pan',$panels,$selectedPanel,['class'=>'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢"/>
            @csrf
        </form>
        </div>
        
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
                @can('admin')
                    <th>操作2</th>
                    <th>操作3</th>
                @elsecan('manager')
                    <th>操作2</th>
                @endcan
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
                    <td><a href="{{ route('monitors.show',['id'=>$monitor->id ]) }}">顯示</a></td>
                    @can('admin')
                        <td><a href="{{ route('monitors.edit',['id'=>$monitor->id ]) }}">編輯</a></td>
                        <td>
                            <form action="{{ url('/monitors/delete',['id'=>$monitor->id]) }}" method="post">
                                <input class="btn btn-default" type="submit" value="刪除"/>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    @elsecan('manager')
                        <td><a href="{{ route('monitors.edit',['id'=>$monitor->id ]) }}">編輯</a></td>
                    @endcan
                </tr>
            @endforeach
        </table>
        {{ $monitors->withQueryString()->links() }}
        <style>
            .monitor_table{
                text-align:center
            }
        </style>
@endsection