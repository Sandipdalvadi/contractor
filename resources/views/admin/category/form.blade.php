@extends('admin.common.admin_layouts')
@section('content')
    <div class="page-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> {{$category->id ? 'Edit' : 'New' }} Category</h1>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
                <li><a href="#">{{$category->id ? 'Edit' : 'New' }} Category</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="card-body">
                            <a href="{{route('admin.category.index')}}" class="btn btn-success">Back</a>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

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