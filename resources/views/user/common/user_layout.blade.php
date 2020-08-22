<!DOCTYPE html>
<html lang="en">
    @include('user.common.style')
    @yield('style')
    
    <body>
        @include('user.common.header')
        @yield('content')
        @include('user.common.footer')
        @include('user.common.script')
        @yield('script')
        

	</body>
</html>