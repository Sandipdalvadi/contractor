<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.common.style')
<body class="sidebar-mini fixed">
<div class="wrapper">
    @include('admin.common.header')
    @include('admin.common.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
@include('admin.common.style')
</body>
</html>