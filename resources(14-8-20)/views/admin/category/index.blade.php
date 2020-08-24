@extends('admin.common.admin_layouts')
@section('content')
<div class="page-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> View Category</h1>
    </div>
    <div>
        <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="#">View Category</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        <strong></strong> {{session('success')}}
                    </div>
                @endif
                @if(session('decline'))
                    <div class="alert alert-danger">
                        <strong></strong> {{session('decline')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('admin.category.form',['id'=>0])}}" class="btn btn-primary btn-sm pull-right" href="#"><i
                                    class="fa fa-lg fa-plus"></i>New Category</a><br><br>
                    </div>

                </div>
                <table class="table table-hover table-bordered table-responsive" id="example" style="overflow-x:auto;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name English</th>
                            <th>Name Arebic</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0
                        @endphp
                        @foreach($result as $res)
                            @php($i++)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$res->name_eng ? $res->name_eng : ''}}</td>
                                <td>{{$res->name_ar ? $res->name_ar : ''}}</td>
                                <td><img src="{{$res->image !="" ? file_exists_in_folder("category",$res->image) : file_exists_in_folder("category/logo.png")}}" height="100px"/></td>
                                <td><label class='switch'><input type='checkbox' @if($res->status == 1) checked @endif value="{{$res->status}}" onchange="changeStatus(this,"{{route('admin.category.changeStatus',['id'=>$res->id])}}")"><span class='slider round'></span>
                                </label></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.category.edit',['id'=>$res->id])}}" class="btn btn-info"
                                        href="#"><i class="fa fa-lg fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-warning"
                                        onclick="deleteRecord('{{route('admin.category.delete',['id'=>$res->id])}}')"><i class="fa fa-lg fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{!! public_url('/datatable_js/js/deletefunction.js') !!}"></script>
@endsection