@extends('app.app')

@section('title')
    Articles
@endsection

@section('content')
    <h1 class="text-2xl text-center font-bold text-orange-500 underline">Articles</h1>

    <div class="py-16 ">
        <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
            <div class="mx-auto grid  gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                {{-- Card --}}
                @forelse ($articles as $article)
                    <div class="bg-gray-100 rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                        <div class="mb-12 space-y-4">
                            <h3 class="text-2xl font-semibold text-purple-900">{{ $article->title }}</h3>
                            <p class="mb-6">{!! substr($article->body, 0, 30) !!}</p>
                            <a href="{{ route('articles.show', $article) }}" class="block font-medium text-purple-600">Voir l'article</a>
                            <span><small>{{ $article->created_at->diffForHumans() }}</small></span>
                        </div>
                        <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                            class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                        {{-- Tags --}}
                        <div class="flex flex-shrink-0">
                            @foreach ($article->tags as $tag)
                                {{-- <span><small>{{ $tag->label }}</small></span> --}}
                                <div class="flex flex-shrink-0 text-sm items-center px-2">
                                    <div class="bg-gray-400 text-gray-600 px-2 py-1 rounded-l-md "><img class="max-h-5"src="/storage/{{$tag->icon }}" alt="{{ $tag->label }}"></div>
                                    <div style="background-color:{{ $tag->color }}" class="text-green-100 px-2 py-1 rounded-r-md">{{ $tag->label }}</div>
                                </div>
                            @endforeach
                        </div>
                        {{-- Fin tags --}}
                    </div>
                @empty
                    <h1 class="text-center"><i>Aucun articles</i></h1>
                @endforelse

                {{-- End Card --}}

            </div>
        </div>
    </div>
@endsection
