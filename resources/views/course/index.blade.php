@extends('course.layouts.app')
@section('title')

@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{cdn('course/css/index.css')}}">
@endsection
@section('content')
    @widget('navigation_bar')
    <div class="top-contain">
        <div class="course">
            @php
                $categoryRepository = app(App\Repositories\CategoryRepository::class);
            @endphp
            <div class="title">
                <h4>课程简介</h4>
                <a class="more" href="javascript:;">+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box course-box">
                <p>{{setting('intro')}}</p>
            </div>
        </div>
        <div class="notice">
            <div class="title">
                <h4>通知公告</h4>
                @php
                    $news = $categoryRepository->findByCateName('通知公告');
                @endphp
                <a class="more" {!! $news->getPresenter()->linkAttribute() !!}>+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box currency-list">
                <ul>
                    @foreach(Facades\App\Widgets\PostList::mergeConfig(['category'=>$news,'limit'=>5])->getData()['posts'] as $post)
                        @php
                            if($loop->first){
                                echo '<li class="item open">';
                            }else{
                                echo '<li class="item">';
                            }
                        @endphp
                        <div class="info">
                            <a href="{!! $post->getPresenter()->url() !!}">
                                <img src="{{image_url($post->cover)}}" alt="{{$post->title}}"/>
                            </a>
                            <a class="text_box" href="{!! $post->getPresenter()->url() !!}">{!! clean($post->postContent->content, 'clear_content_style')!!}</a>
                        </div>
                        <a class="text_title" href="{!! $post->getPresenter()->url() !!}">{!! $post->title !!}</a>
                        <span class="time">{!! $post->published_at->format('Y-m-d')!!}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="botton-contain">
        <div class="teacher">
            <div class="title">
                <h4>主讲老师</h4>
                @php
                    $teachers = $categoryRepository->findByCateName('主讲老师');
                @endphp
                <a class="more" {!! $teachers->getPresenter()->linkAttribute() !!}>+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box">
                <ul>
                    @foreach(Facades\App\Widgets\PostList::mergeConfig(['category'=>$teachers,'limit'=>6])->getData()['posts'] as $post)
                        <li class="item">
                            <a class="download-text_title" href="{!! $post->getPresenter()->url() !!}">{{$post->title}}</a>
                            <span class="download-time">{!! $post->published_at->format('Y-m-d')!!}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="download">
            <div class="title">
                <h4>资源下载</h4>
                @php
                    $resources = $categoryRepository->findByCateName('资源下载');
                @endphp
                <a class="more" {!! $resources->getPresenter()->linkAttribute() !!}>+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box">
                <ul>
                    @foreach(Facades\App\Widgets\PostList::mergeConfig(['category'=>$resources,'limit'=>6])->getData()['posts'] as $post)
                        <li class="item">
                            <a class="download-text_title" href="{!! $post->getPresenter()->url() !!}">{{$post->title}}</a>
                            <span class="download-time">{!! $post->published_at->format('Y-m-d')!!}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    @widget('image_link',['type'=>'image_link'])
    @include('course.layouts.footer')
@endsection

@push('js')
    <script type="text/javascript">
        /*通知公告*/
        $(function () {
            var $allItem = $('.notice .currency-list .item');
            $allItem.hover(function () {
                var _self = $(this);
                _self.parent().find('.open').removeClass('open');
                _self.addClass('open');
            }, function () {});
        });
        /* 图片滚动 */
        $(function () {
            var $product = $('#product>ul');
            var productTimer = null;
            $product.append($product.find('li').last().clone(true));
            $product.css('width', $product.find('li').length * 250);

            function move() {
                var left = $product.css('left');
                var currentLeft = parseInt(left.substring(0, left.length - 2));
                $product.css('left', currentLeft - 1);
                if (currentLeft <= -250) {
                    $product.css('left', 0);
                    $product.append($product.find('li').first());
                }
            }

            productTimer = setInterval(function () {
                move();
            }, 20);
            $product.hover(function () {
                clearInterval(productTimer);
            }, function () {
                productTimer = setInterval(function () {
                    move();
                }, 20);
            })
        });
    </script>
@endpush