<ul class="d-flex text-success justify-content-between p-2" >

    <div class="d-flex fw-bold disabled">
            <i class="page-link px-2 ">Showing {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }} of {{ $paginator->total() }}</i>
    </div>
    <div class="d-flex bg-white rounded-1">
        <li class="  border-end border-success {{ $paginator->onFirstPage() ? 'disabled' : 'hover' }}">
            <a class="page-link px-2   fw-bolder" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        </li>
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class=" disabled border-end border-success  "><span class="page-link px-2 ">{{ $element }}</span></li>
            @elseif (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="border-end border-success  {{ $page == $paginator->currentPage() ? 'active bg-dark' : 'hover' }}">
                        <a class="page-link px-2 " href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach
        <li class=" {{ $paginator->hasMorePages() ? 'hover' : 'disabled' }}">
            <a class="page-link px-2  fw-bolder" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>

        
    </div>
</ul>