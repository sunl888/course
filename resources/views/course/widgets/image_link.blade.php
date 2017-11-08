<div class="img-link">
    <div class="link-box" id="product">
        <ul>
            @foreach($links as $link)
                <li><a target="_blank" href="{!! $link->url !!}" title="{!! $link->name !!}"><img src="{!! image_url($link->logo) !!}" alt="{!! $link->name !!}"><p>{!! $link->name !!}</p></a></li>
            @endforeach
        </ul>
    </div>
</div>