@extends('admin.common.admin_layouts')
@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Category</h4>
                                    <!--<span>Advanced initialisation of DataTables</span>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Category</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            @if(session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                
                            @if(session()->has('errorMessage'))
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ session()->get('errorMessage') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-12">
                            
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h5>Cateogry List</h5>
                                    <div class="float-right">
                                        <a href="{{route('admin.category.form',['id'=>0])}}" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i>Add New </a>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name English</th>
                                                    <th>Name Urdu</th>
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
                                                    <tr id="{{$res->id}}">
                                                        <td>{{$i}}</td>
                                                        <td>{{$res->name_en ? $res->name_en : ''}}</td>
                                                        <td>{{$res->name_ur ? $res->name_ur : ''}}</td>
                                                        <td>{{$res->name_ar ? $res->name_ar : ''}}</td>
                                                        <td><img src="{{$res->image !="" ? file_exists_in_folder("category",$res->image) : file_exists_in_folder("category","logo.jpeg")}}" height="100px"/></td>
                                                        <td><label class='switch'><input type='checkbox' @if($res->status == 1) checked @endif value="{{$res->status}}" onchange="changeStatus(this,'{{route('admin.category.changeStatus',['id'=>$res->id])}}')"><span class='slider round'></span>
                                                        </label></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{route('admin.category.form',['id'=>$res->id])}}" class="btn btn-info"
                                                                href="#"><i class="fa fa-lg fa-edit"></i></a>
                                                                <a href="javascript:void(0)" class="btn btn-warning"
                                                                onclick="deleteRecord('{{route('admin.category.delete',['id'=>$res->id])}}',{{$res->id}})"><i class="fa fa-lg fa-trash"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{!! public_url('/datatable_js/js/deletefunction.js') !!}"></script>
<script>

function changeStatus(objs,urls){

    // if(objs.value == "Published")
    // {
    //     jQuery(objs).attr('value','Unpublished');
    // }
    // else
    // {
        // alert(objs.value);
        // var dataValue = 'Published';
    //     jQuery(objs).attr('value','Published');
    // }
    if($(objs).is(":checked")){
        var dataValue = '1';
        // alert("Checkbox is checked.");
    }
    else if($(objs).is(":not(:checked)")){
        var dataValue = '0';
        // alert("Checkbox is unchecked.");
    }

    jQuery.ajax({
        type: "get",
        url: urls,
        data: {'status':dataValue},
        success: function(resultData){
            // alert
        }
    });

}
</script>
@endsection