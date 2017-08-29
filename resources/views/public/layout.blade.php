<!DOCTYPE html>
<html>
@include('public.header')
<body>
@include('public.following_menu')

@include('public.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

@include('public.footer')

@include('public.script')

@yield('script')
</body>
</html>