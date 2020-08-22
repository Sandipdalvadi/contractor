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
                                        <h4>Dashboard</h4>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="page-title">Dashboard</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-c-yellow update-card">
                                            <div class="card-block">
                                                <div class="row align-items-end">
                                                    <div class="col-8">
                                                        <h4 class="text-white">{{ $categoryCount }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="text-white m-b-0"><a
                                                        href="{{ route('admin.category.index') }}">All Categories</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-c-green update-card">
                                            <div class="card-block">
                                                <div class="row align-items-end">
                                                    <div class="col-8">
                                                        <h4 class="text-white">290+</h4>
                                                        <h6 class="text-white m-b-0">Page Views</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <canvas id="update-chart-2" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="text-white m-b-0"><i
                                                        class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15
                                                    am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-c-pink update-card">
                                            <div class="card-block">
                                                <div class="row align-items-end">
                                                    <div class="col-8">
                                                        <h4 class="text-white">145</h4>
                                                        <h6 class="text-white m-b-0">Task Completed</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <canvas id="update-chart-3" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="text-white m-b-0"><i
                                                        class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15
                                                    am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-c-lite-green update-card">
                                            <div class="card-block">
                                                <div class="row align-items-end">
                                                    <div class="col-8">
                                                        <h4 class="text-white">500</h4>
                                                        <h6 class="text-white m-b-0">Downloads</h6>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <canvas id="update-chart-4" height="50"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="text-white m-b-0"><i
                                                        class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15
                                                    am</p>
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
    </div>

@endsection
