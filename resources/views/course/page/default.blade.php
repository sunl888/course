@extends('course.layouts.app')

@section('keywords'){!! $category->getKeywords() !!}@endsection
@section('description'){!! $category->getDescription() !!}@endsection
@section('title'){{ Breadcrumbs::pageTitle(' - ', 'category', $category) }}@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{cdn('course/css/list.css')}}">
@endsection
@section('content')
    @widget('navigation_bar')
    <div class="banner">
        <img src="{{cdn('course/images/thumb.jpg')}}">
    </div>
    <div class="list-contain">
        @widget('navigation_sidebar')
        <div class="list-box">
            <div class="list-box-contain">
                <div class="list-title">
                    <h4>{{$category->cate_name}}</h4>
                    {{ Breadcrumbs::render('category', $category) }}
                </div>
                <div class="list-news">
                    {!! $page->postContent->content !!}
                </div>
            </div>
        </div>
    </div>
    @include('course.layouts.footer')
@endsection