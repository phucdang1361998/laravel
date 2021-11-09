<?php
$name = \Illuminate\Support\Facades\Session::get('admin_name');
?>
@if ($paginator->total())
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Tổng số dòng: {{$paginator->total()}}</div>
    </div>
@endif

@if ($paginator->hasPages())
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link disabled">Previous</a>
                    </li>
                @else
                    <li class="paginate_button page-item previous" id="dataTable_previous">
                        <a href="{{ $paginator->previousPageUrl().'&name='.$name }}" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="paginate_button page-item disabled">
                            <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">{{ $element }}</a>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="{{ $page }}" tabindex="0" class="page-link">{{ $page }}</a>
                                </li>
                            @else
                                <li class="paginate_button page-item ">
                                    <a href="{{ $url.'&name='.$name }}" aria-controls="dataTable" data-dt-idx="{{ $page }}" tabindex="0" class="page-link">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="paginate_button page-item next" id="dataTable_next">
                        <a href="{{ $paginator->nextPageUrl().'&name='.$name }}" aria-controls="dataTable" data-dt-idx="{{ $paginator->nextPageUrl() }}" tabindex="0" class="page-link">Next</a>
                    </li>
                @else
                    <li class="paginate_button page-item next disabled" id="dataTable_next">
                        <a aria-controls="dataTable" data-dt-idx="{{ $paginator->nextPageUrl() }}" tabindex="0" class="page-link">Next</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
