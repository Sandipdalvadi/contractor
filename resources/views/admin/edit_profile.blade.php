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
                                        <h4>Edit Profile</h4>
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
                                        <li class="breadcrumb-item"><a href="#!">Edit Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="page-title">Edit Profile</h5>
                                <div class="float-right">
                                    <a href="{{ route('admin.home') }}"><button class="btn btn-primary pull-right box-title"
                                            type="submit">Back</button></a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row">
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
                                    <div class="col-sm-12">

                                        <form class="login-form" method="post" action="{{ route('admin.profile.update') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <input class="form-control" type="hidden" name="id"
                                                value="{{ $user->id ? $user->id : 0 }}">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input class="form-control" type="text" placeholder="Name" title="Name"
                                                    name="name" value="{{ $user->name ? $user->name : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input class="form-control" type="email" placeholder="Email" title="Email"
                                                    name="email" value="{{ $user->email ? $user->email : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Phone</label>
                                                <input class="form-control" type="text" placeholder="Phone" title="Phone"
                                                    name="phone" value="{{ $user->phone ? $user->phone : '' }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="pasword" class="control-label">Change Password</label>
                                                <input type="checkbox" name="isChange" id="showPasswordValue" value="1"
                                                    onclick="showPassword(this.value)">

                                            </div>

                                            <div class="form-group passwordValue" id="ispwd" style="display:none">
                                                <label for="Mobile" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="Password"
                                                    title="Password Text"><span
                                                    style="color:red">{{ $errors->first('Password') }}</span>
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
    <script type="text/javascript">
        function showPassword(checkValue) {
            if (checkValue == 1) {
                jQuery("#showPasswordValue").val(0);
                jQuery(".passwordValue").show();
            } else {
                jQuery("#showPasswordValue").val(1);
                jQuery(".passwordValue").hide();
            }
        }

    </script>
@endsection
