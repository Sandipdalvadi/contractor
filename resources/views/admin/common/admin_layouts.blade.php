<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.common.style')
@yield('style')
<body class="">
    @include('admin.common.header')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            @include('admin.common.sidebar')
            @yield('content')
        </div>
    </div>
    @include('admin.common.control_sidebar')
    @include('admin.common.footer')

@include('admin.common.script')
@yield('script')
</body>
</html>