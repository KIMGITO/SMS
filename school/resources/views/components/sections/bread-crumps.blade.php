<div class="small d-flex text-strat text-success custom-breadcrumps">
    <ul class="d-flex">
        <li>
            <a href="{{route('home')}}" class="text-success"> <i class="fas fa-home"> </i> </a>
        </li>

    @for($i = 1; $i <= count(Request::segments()); $i++)
        <li>
            {{-- <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
            <span class="text-primary fw-bolder mx-1"> / </span> <span class="text-success">{{Request::segment($i)}}</span>
            </a> --}}
            @if ($i != count(Request::segments()))
                <li>
                    <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                    <span class="text-primary fw-bolder mx-1"> / </span> <span class="text-success">
                        {{ucfirst(Request::segment($i))}}
                    </span>
                </a>
                </li>
            @endif
        </li>
        @if ($i == count(Request::segments()))
            <li>
                <span class="text-primary fw-bolder mx-1"> / </span> <span class="text-info">
                    {{ucfirst(Request::segment($i))}}
                </span>
            </li>
        @endif
    @endfor
    </ul>
</div>
