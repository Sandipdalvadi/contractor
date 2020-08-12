@extends('admin.common.admin_layouts')
@section('content')

    <div class="page-title">
        <div>
            <h1><i class="fa fa-pie-chart"></i> {{__('messages.dashboard')}}</h1>

        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="#">{{__('messages.dashboard')}} {{__('messages.welcome')}}</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Total Users</h4>
                    <p><b>0</b></p>
                </div>
            </div>
        </div>
        
    </div>
@endsection