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
                <a class="more" href="javascript:;">+More</a>
                <i class="icon_title"></i>
            </div>
            <div class="contain_box currency-list">
                <ul>
                    <li class="item open">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <div class="info">
                            <a href="javascript:;"><img src="./images/new.jpg" alt=""></a>
                            <a class="text_box" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。社会理论当中常常用一些抽象和甚至复杂理论框架来解释和分析社会样式和宏观社会结构。社会理论总跟经典的学科有一个令人不安的关系，就是大部分的重要社会学家从未担任大学职务。</a>
                        </div>
                        <a class="text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="time">2017-10-11</span>
                    </li>
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
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
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
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
                    <li class="item">
                        <a class="download-text_title" href="javascript:;">社会学是系统地研究社会行为与人类群体的学科。</a>
                        <span class="download-time">2017-10-11</span>
                    </li>
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
            }, function () {
            });
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