<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') - 淮南师范学院社会学精品课程@show</title>
    <meta name="description" content="@section('description')@show">
    <meta name="keywords" content="@section('keywords')@show">
    <link rel="stylesheet" type="text/css" href="{{cdn('course/css/common.css')}}">
    <script type="text/javascript" src="{!! cdn('course/js/jquery-1.11.0.min.js') !!}"></script>
    @yield('css')
    @yield('js')
</head>
<body>
@yield('content')
@stack('js')
</body>
</html>