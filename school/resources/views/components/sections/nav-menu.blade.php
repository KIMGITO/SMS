
@props([
    'hasSubMenu' => false,
    'subMenu' => [],
    'href',
    'icon',
    'label'

])

<li>
    @if ($hasSubMenu)
        
    @endif
    <div class="iocn-link ">
        <a href='{{ $href =='#' ? url($href) : route($href)}}'>
            <i {{ $attributes->merge(['class'=>'fas '.$icon]) }} ></i>
            <span class="link_name">{{ $label }}</span>
        </a>
    @if ($hasSubMenu)
    <i class='fas fa-chevron-down arrow fs-1' ></i>    
    
    </div>
    <ul class="sub-menu">
        @foreach ($subMenu as $item)
        <li>
            @if ($item['link_name'] ?? false)
            <a class="link_name" href="{{ url($item['href']) }}">{{ $item['label'] }}</a>
            @else
            <a href="{{ $item['href'] =='#' ? url($item['href']) : route($item['href'])}}"> <i {{ $attributes->merge(['class'=>'fas '.$item['icon']] ?? " ") }}></i> {{ $item['label'] }}</a>
            @endif
        </li>
        @endforeach
    </ul>
    @endif
</li>

