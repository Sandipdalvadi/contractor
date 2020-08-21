<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.common.style')
<body class=" hold-transition skin-black sidebar-mini">
<div class="wrapper">
    @include('admin.common.header')
    @include('admin.common.sidebar')
    @yield('content')
    @include('admin.common.control_sidebar')
    @include('admin.common.footer')

</div>
@include('admin.common.script')
</body>
</html>