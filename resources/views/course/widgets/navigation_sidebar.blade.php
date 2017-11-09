<div class="list-nav">
    <div class="list-title">
        <h4>{!! $navigation->getActiveTopNav()->cate_name !!}</h4>
    </div>
    <ul>
        @foreach($navigation->getActiveChildrenNav() as $childNav)
            <li class="item">
                <a @if($childNav->equals($navigation->getActiveNav()))class="active"@endif {!! $childNav->getPresenter()->linkAttribute() !!}>{!! $childNav->cate_name !!}<span>></span></a>
            </li>
        @endforeach
    </ul>
</div>