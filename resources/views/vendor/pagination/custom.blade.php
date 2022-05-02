<style>
    .pagination>.disabled>a,
    .pagination>.disabled>a:focus,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>span,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>span:hover {
        color: #999;
        background-color: #fff;
        border-color: #ddd;
        pointer-events: auto !important;
        cursor: not-allowed !important;
    }
</style>
@if ($paginator->hasPages())
<div class="col-md-12 col-lg-12 no-padding" id="col-hidden" style="padding: 0">
    <div class="t-status-text">Hiển thị kết quả từ {{$paginator->firstItem()}} - {{$paginator->lastItem()}} trên tổng {{$paginator->total()}}
    </div>
</div>
<ul class="pagination pagination" style="float:right">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-left" aria-hidden="true"></i></span></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
    @endif

    @if($paginator->currentPage() > 2)
    <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
    @endif
    @if($paginator->currentPage() > 3)
    <li class="page-item"><span class="page-link">...</span></li>
    @endif
    @foreach(range(1, $paginator->lastPage()) as $i)
    @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
        @if ($i == $paginator->currentPage())
        <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
        @endif
        @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="page-item"><span class="page-link">...</span></li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 1)
                <li class="page-item hidden-xs"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                @else
                <li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                @endif
</ul>
@endif