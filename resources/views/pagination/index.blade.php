@if ($paginator->hasPages())
    <div class="tm-pagination mt-50 d-none d-md-flex">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            @else
                <li>
                    <a href="{{ LaravelLocalization::localizeUrl($paginator->previousPageUrl()) }}" rel="prev"
                        aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">
                        {{ $element }}
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="is-active" aria-current="page">
                                <a href="javascript:void(0)">
                                    {{ $page }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl($url) }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ LaravelLocalization::localizeUrl($paginator->nextPageUrl()) }}" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @endif
        </ul>
    </div>

    <div class="tm-pagination mt-50 d-flex d-md-none">
        <ul>
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ LaravelLocalization::localizeUrl($paginator->previousPageUrl()) }}"
                        aria-label="@lang('pagination.previous')" rel="prev">
                        &lsaquo;
                    </a>
                </li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <!--  Use three dots when current page is greater than 4.  -->
                        @if ($paginator->currentPage() > 3 && $page === 2)
                            <li class="disabled">
                                ...
                            </li>
                        @endif

                        <!--  Show active page else show the first and last two pages from current page.  -->
                        @if ($page == $paginator->currentPage())
                            <li class="is-active" aria-current="page">
                                <a href="javascript:void(0)">
                                    {{ $page }}
                                </a>
                            </li>
                        @elseif (
                            $page === $paginator->currentPage() + 1 ||
                                $page === $paginator->currentPage() - 1 ||
                                $page === $paginator->lastPage() ||
                                $page === 1)
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl($url) }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif

                        <!--  Use three dots when current page is away from end.  -->
                        @if ($paginator->currentPage() < $paginator->lastPage() - 2 && $page === $paginator->lastPage() - 1)
                            <li class="disabled">
                                ...
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ LaravelLocalization::localizeUrl($paginator->nextPageUrl()) }}" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @endif
        </ul>
    </div>
@endif
