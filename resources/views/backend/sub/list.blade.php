@extends('backend.layouts.app')
@section('controller', 'Danh sách' )
@section('controller_route', route('category.index'))
@section('action', 'Danh sách')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('flash::message')
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="20px">STT</th>
                            <th>Số điện thoại</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ date('d-m-Y H:i:s', strtotime($item->created_at)) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
