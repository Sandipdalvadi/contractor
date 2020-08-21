@extends('admin.common.admin_layouts')
@section('content')

    <div class="page-title">
        <div>
            <h1><i class="fa fa-pie-chart"></i> {{__('messages.editProfile')}}</h1>

        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="#">{{__('messages.editProfile')}}</a></li>
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
                            <a href="{{route('admin.home')}}" class="btn btn-success">Back</a>
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

                                <form class="login-form" method="post" action="{{route('admin.profile.update')}}"
                                      enctype="multipart/form-data">
                                      @csrf
                                    
                                    <input class="form-control" type="hidden" name="id" value="{{$user->id ? $user->id : 0}}">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" type="text" placeholder="Name" title="Name" name="name" value="{{$user->name ? $user->name : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" type="email" placeholder="Email" title="Email" name="email" value="{{$user->email ? $user->email : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input class="form-control" type="text" placeholder="Phone" title="Phone" name="phone" value="{{$user->phone ? $user->phone : ''}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pasword" class="control-label">Change Password</label>
                                        <input type="checkbox" name="isChange" id="showPasswordValue" value="1" onclick="showPassword(this.value)">
                                        
                                    </div>

                                    <div class="form-group passwordValue" id="ispwd" style="display:none">
                                        <label for="Mobile" class="control-label">Password</label>
                                        <input type="password" class="form-control" name="Password" title="Password Text"><span style="color:red">{{ $errors->first('Password') }}</span>
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
    <script type="text/javascript">
        function showPassword(checkValue){
            if(checkValue ==1){
                jQuery("#showPasswordValue").val(0);
                jQuery(".passwordValue").show();
            }
            else{
                jQuery("#showPasswordValue").val(1);
                jQuery(".passwordValue").hide();
            }
        }
    </script>
    @endsection