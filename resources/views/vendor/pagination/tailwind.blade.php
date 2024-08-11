@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-between items-center">

        <div class="flex flex-1 sm:hidden">
            <p class="text-sm text-gray-700 leading-5 dark:text-gray-300">
                {!! __('Showing') !!}
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <ul
                    class="list-none inline-block rounded bg-slate-100 dark:bg-slate-700 px-3 py-2 inli  dark:text-whitene-block">
                    {{-- Previous Page Link --}}
                    <li class="inline-block">
                        @if ($paginator->onFirstPage())
                            {{-- Make Disabled --}}
                            <span
                                class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 text-slate-800
                                                dark:text-white rounded mx-[3px] sm:mx-1 text-sm font-Inter font-medium transition-all
                                                duration-300 relative top-[2px] opacity-50 cursor-not-allowed">
                                <iconify-icon icon="material-symbols:arrow-back-ios-rounded"></iconify-icon>
                            </span>
                        @else
                            <a href="{{ $paginator->previousPageUrl() }}"
                                class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 dark:hover:bg-black-500 text-slate-800
                                                        dark:text-white rounded mx-[3px] sm:mx-1 hover:bg-black-500 hover:text-white text-sm font-Inter font-medium transition-all
                                                        duration-300 relative top-[2px]">
                                <iconify-icon icon="material-symbols:arrow-back-ios-rounded"></iconify-icon>
                            </a>
                        @endif
                    </li>

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="inline-block">
                                <span
                                    class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 dark:hover:bg-black-500 text-slate-800
                                                              dark:text-white rounded mx-[3px] sm:mx-1 hover:bg-black-500 hover:text-white text-sm font-Inter font-medium transition-all
                                                              duration-300 ">
                                    {{ $element }}
                                </span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="inline-block">
                                        <span
                                            class="flex items-center justify-center w-6 h-6 bg-slate-100  text-slate-800
                                                                      dark:text-white rounded mx-[3px] sm:mx-1 hover:bg-black-500 hover:text-white text-sm font-Inter font-medium transition-all
                                                                      duration-300 p-active">
                                            {{ $page }}</span>
                                    </li>
                                @else
                                    <li class="inline-block">
                                        <a href="{{ $url }}"
                                            class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 dark:hover:bg-black-500 text-slate-800
                                                                      dark:text-white rounded mx-[3px] sm:mx-1 hover:bg-black-500 hover:text-white text-sm font-Inter font-medium transition-all
                                                                      duration-300 ">
                                            {{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    <li class="inline-block">
                        @if ($paginator->hasMorePages())
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                                class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 dark:hover:bg-black-500 text-slate-800
                                                dark:text-white rounded mx-[3px] sm:mx-1 hover:bg-black-500 hover:text-white text-sm font-Inter font-medium transition-all
                                                duration-300 relative top-[2px]">
                                <iconify-icon icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>
                            </a>
                        @else
                            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}"
                                class="flex items-center justify-center w-6 h-6 bg-slate-100 dark:bg-slate-700 text-slate-800
                                                dark:text-white rounded mx-[3px] sm:mx-1 text-sm font-Inter font-medium transition-all
                                                duration-300 relative top-[2px] opacity-50 cursor-not-allowed">
                                <iconify-icon icon="material-symbols:arrow-forward-ios-rounded"></iconify-icon>
                            </span>
                        @endif
                    </li>

                </ul>
            </div>
        </div>
    </nav>
@endif
