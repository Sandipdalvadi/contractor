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
                                        <h4>{{ $siteSetting->id ? 'Edit' : 'Add new' }} Site Setting</h4>
                                        <!--<span>Advanced initialisation of DataTables</span>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{route('admin.home')}}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Site Setting</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">{{ $siteSetting->id ? 'Edit' : 'Add new' }}
                                                Site Setting</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="page-title">{{ $siteSetting->id ? 'Edit' : 'Add new' }}</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12">

                                            @if (session()->has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif

                                            @if (session()->has('errorMessage'))
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    {{ session()->get('errorMessage') }}
                                                </div>
                                            @endif
                                        </div>


                                        <form class="login-form" method="post" action="{{ route('admin.category.save') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <input class="form-control" type="hidden" name="id"
                                                value="{{ $siteSetting->id ? $siteSetting->id : 0 }}">
                                            <div class="form-group">
                                                <label class="control-label">About En</label>
                                                <input class="form-control editor" id="editor0" type="text" placeholder="About English"
                                                    title="About English" name="about_en"
                                                    value="{{ $siteSetting->about_en ? $siteSetting->about_en : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">About Ur</label>
                                                <input class="form-control editor" id="editor1" type="text" placeholder="About Urdu"
                                                    title="About Urdu" name="about_ur"
                                                    value="{{ $siteSetting->about_ur ? $siteSetting->about_ur : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">About Ar</label>
                                                <input class="form-control editor" id="editor2" type="text" placeholder="About Arabic"
                                                    title="About Arabic" name="about_ar"
                                                    value="{{ $siteSetting->about_ar ? $siteSetting->about_ar : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Map API Key</label>
                                                <input class="form-control" type="text" placeholder="Map API Key"
                                                    title="Map API Key" name="map_api_key"
                                                    value="{{ $siteSetting->map_api_key ? $siteSetting->map_api_key : '' }}">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Site Logo</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="file" name="site_logo" id="imgInp">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img id="blah"
                                                            src="{{ $siteSetting->site_logo != '' ? file_exists_in_folder('category', $siteSetting->site_logo) : file_exists_in_folder('default_images', 'blank_image.jpeg') }}"
                                                            alt="Image" width="150px" />
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
    @endsection
@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<script>
    var editorId = 0;
    $(".editor").each(function() {
        ClassicEditor.create(document.querySelector('#editor'+editorId))
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
        } );
        editorId++;
    });
          
</script>
@endsection
