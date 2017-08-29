<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - really_li</title>
    <!--semantic css-->
    <link rel="stylesheet" type="text/css" href="{{asset("semantic/out/semantic.min.css")}}" >
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")}}" >

    @yield('css')

</head>
<body>
<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">Log in</a>
            </div>
            <div class="item">
                <a class="ui primary button">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <a class="item">Login</a>
    <a class="item">Signup</a>
</div>
<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

@include('public.footer')

@include('public.script')

@yield('script')
</body>
</html>