@extends('course.layouts.app')

@section('keywords'){!! $post->getKeywords() !!}@endsection
@section('description'){!! $post->getDescription() !!}@endsection
@section('title'){!! $post->title !!}@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{cdn('course/css/details.css')}}">
@endsection
@section('content')
    @widget('navigation_bar')
    <div class="details">
        <div class="details-title">
            {!! Breadcrumbs::render('post', $post) !!}
        </div>
        <div class="details-box">
            <div class="details-box-title">
                <h2>{!! $post->title !!}</h2>
                <span>作者：{!! isset($post->user->nick_name)?$post->user->nick_name:$post->user->user_name !!}</span>
                <span>日期：{!! $post->published_at->format('Y年m月d日')!!}  点击量：{!! $post->views_count !!}次</span>
            </div>
            <p>{!! $post->postContent->content !!}</p>
        </div>
    </div>
    @include('course.layouts.footer')
@endsection

