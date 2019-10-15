@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-600 text-base md:my-0">Ditulis oleh {{ $page->author }}  pada  {{ date('j F Y', $page->date) }}</p>

{{--    @if ($page->categories)--}}
{{--        <div class="mb-10 mt-4">--}}
{{--            @foreach ($page->categories as $i => $category)--}}
{{--                <a--}}
{{--                        href="{{ '/post/categories/' . $category }}"--}}
{{--                        title="View posts in {{ $category }}"--}}
{{--                        class="inline-block bg-gray-200 font-bold hover:bg-red-200 leading-loose tracking-wide text-gray-800 uppercase text-xs rounded mr-1 px-3 pt-px"--}}
{{--                >{{ $category }}</a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}

    <hr>

    <div class="border-b border-red-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection