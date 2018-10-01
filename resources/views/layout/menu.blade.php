@foreach($items as $item)
    @if(!$item->hasChildren())
        <li><a href="{{ $item->url()  }}">{{ $item->title  }}</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
                @include('layout.menu',['items' => $item->children()])
            </ul>
        </li>
    @endif
@endforeach

