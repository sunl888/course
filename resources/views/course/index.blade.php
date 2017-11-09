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
                <p>社会学是一门研究社会事实（客观事实：社会行为、社会结构、社会问题等；主观事实：人性、社会学心理等）的拥有多重范式的学科，起源于19世纪三四十年代。是从社会哲学演化出来的现代学科。社会学是一门具有多重研究方式的学科。主要有科学主义的实证论的定量方法和人文主义的理解方法，它们相互对立相互联系，发展及完善一套有关人类社会结构及活动的知识体系，并以运用这些知识去寻求或改善社会福利为主要目标。社会学的研究范围广泛，包括了由微观层级的社会行动（agency）或人际互动，至宏观层级的社会系统或结构，因此社会学通常跟经济学、政治学、人类学、心理学、历史学等学科并列于社会科学领域之下。社会学是一门研究社会事实（客观事实：社会行为、社会结构、社会问题等；主观事实：人性、社会学心理等）的拥有多重范式的学科，起源于19世纪三四十年代。是从社会哲学演化出来的现代学科。社会学是一门具有多重研究方式的学科。主要有科学主义的实证论的定量方法和人文主义的理解方法，它们相互对立相互联系，发展及完善一套有关人类社会结构及活动的知识体系，并以运用这些知识去寻求或改善社会福利为主要目标。社会学的研究范围广泛，包括了由微观层级的社会行动（agency）或人际互动，至宏观层级的社会系统或结构，因此社会学通常跟经济学、政治学、人类学、心理学、历史学等学科并列于社会科学领域之下。</p>
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
                <a class="more" href="javascript:;">+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box">
                <ul>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>

                </ul>
            </div>
        </div>
        <div class="download">
            <div class="title">
                <h4>资源下载</h4>
                <a class="more" href="javascript:;">+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box">
                <ul>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>

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