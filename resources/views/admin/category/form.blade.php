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
                                    <h4>{{$category->id ? 'Edit' : 'Add new' }} Category</h4>
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
                                    <li class="breadcrumb-item"><a href="#">{{$category->id ? 'Edit' : 'Add new' }} Category</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="page-title">{{$category->id ? 'Edit' : 'Add new' }}</h5>
                            
                            <div class="float-right">
                                <a href="{{route('admin.category.index')}}"><button class="btn btn-primary pull-right box-title" type="submit">Back</button></a>
                                    
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
                        </div>
                        
                        
                        
                        <div class="card-block">
                                  
                            <div class="row">
                                <div class="col-sm-12">

                                    <form class="login-form" method="post" action="{{route('admin.category.save')}}"
                                      enctype="multipart/form-data">
                                      @csrf
                                    
                                        <input class="form-control" type="hidden" name="id" value="{{$category->id ? $category->id : 0}}">
                                        <div class="form-group">
                                            <label class="control-label">Name En</label>
                                            <input class="form-control" type="text" placeholder="Name English" title="Name English" name="name_en" value="{{$category->name_en ? $category->name_en : ''}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Name Ur</label>
                                            <input class="form-control" type="text" placeholder="Name Urdu" title="Name Urdu" name="name_ur" value="{{$category->name_ur ? $category->name_ur : ''}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Name Ar</label>
                                            <input class="form-control" type="text" placeholder="Name Arabic" title="Name Arabic" name="name_ar" value="{{$category->name_ar ? $category->name_ar : ''}}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label">Status </label>
                                            <select class="form-control select2" id="select" name="status">
                                                <option @if($category->status == 1) selected @endif value="1">Active</option>
                                                <option @if($category->status == 0) selected @endif value="0">In Active</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Image <span style="color: #E26F39;font-size: 12px">(Use 375 * 600px)</span></label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control" type="file" name="image"  id="imgInp" >
                                                </div>
                                                <div class="col-md-6">
                                                    <img id="blah" src="{{$category->image !="" ? file_exists_in_folder("category",$category->image) : file_exists_in_folder("default_images","blank_image.jpeg")}}" alt="Image" width="150px"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group btn-container">
                                            <button class="btn btn-primary btn-block"> SAVE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    </script>
@endsection