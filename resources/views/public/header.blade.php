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