<div class="header">
    <div class="header_box"></div>
    <div class="nav">
        <ul>
            <li {!! is_null($navigation->getActiveTopNav())?' class="active"':'' !!}>
                <a href="{!! route('frontend.web.index')!!}">首页</a>
            </li>
            @foreach($allNav as $category)
                <li>
                    <a title="{!! $category->cate_name !!}" {!! $category->equals($navigation->getActiveTopNav())?' class="active"':'' !!} {!! $category->getPresenter()->linkAttribute() !!}>{!! $category->cate_name !!}</a>
                    @if($category->hasChildren())
                        <div class="sub-nav">
                            @foreach($category->children as $children)
                                <a title="{!! $children->cate_name !!}" {!! $children->getPresenter()->linkAttribute() !!}>{!! $children->cate_name !!}</a>
                            @endforeach
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>