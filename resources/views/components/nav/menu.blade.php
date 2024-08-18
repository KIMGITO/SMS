
@props([
    'hasSubMenu' => false,
    'subMenu' => []
])

<li>
    @if ($hasSubMenu)
        
    @endif
    <div class="iocn-link">
        <a href='{{ $href }}'>
            <i {{ $attributes->merge(['class'=>'fas '.$icon]) }} ></i>
            <span class="link_name">{{ $label }}</span>
        </a>
    @if ($hasSubMenu)
    <i class='bx bxs-chevron-down arrow' ></i>    
    @endif
    </div>
    <ul class="sub-menu">
        @foreach ($subMenu as $item)
        <li>
            @if ($item['link_name'] ?? false)
            <a class="link_name" href="{{ url($item['href']) }}">{{ $item['label'] }}</a>
            @else
            <a href="{{ url($item['href'])}}"> <i {{ $attributes->merge(['class'=>'fas '.$item['icon']] ?? " ") }}></i> {{ $item['label'] }}</a>
            @endif
        </li>
        @endforeach
    </ul>
</li>

{{-- 
<li>
    <div class="iocn-link">
        <a href="#">
        <i class="fas fa-person-chalkboard fa-x1"></i>
        <span class="link_name">Stuffs</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
    </div>
    <ul class="sub-menu ">
        <li><a class="link_name" href="#">Stuffs</a></li>
        <li><a href="#"><i class="fas fa-bars sub-icon"></i> List All </a></li>
        <li><a href="#"><i class="fas fa-user-plus"></i>Add Teacher</a></li>
        <li><a href="#">Add Non Teaching</a></li>
        <li><a href="#">PHP & MySQL</a></li>
    </ul>
</li> --}}