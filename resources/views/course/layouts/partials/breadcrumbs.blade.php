@if (count($breadcrumbs))

    <ul class="list-box-ul">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>></li>
            @else
                <li class="active"><span>{{ $breadcrumb->title }}</span></li>
            @endif

        @endforeach
    </ul>

@endif