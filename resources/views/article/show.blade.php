@extends('app.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
<div class="w-full md:w-2/5 mx-auto">
    @foreach ($article->tags as $tag)
    {{-- <span><small>{{ $tag->label }}</small></span> --}}
    <div class="flex flex-shrink-0 text-sm items-center px-2">
        <div class="bg-gray-400 text-gray-600 px-2 py-1 rounded-l-md">Logo</div>
        <div class="bg-gray-500 text-green-100 px-2 py-1 rounded-r-md">{{ $tag->label }}</div>
    </div>
    @endforeach
    
    <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none">
        {{ $article->title }}
    </div>
    
    <div class="w-full text-gray-500 px-5 pb-5 pt-2">
       {{ $article->created_at->diffForHumans() }}
    </div>
    
    {{-- <div class="mx-5">
    <img src="https://static.politico.com/dims4/default/fcd6d6a/2147483647/resize/1920x/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F22%2F87%2F2259ffd444678054896b9fa32b4d%2Fgettyimages-1221513169.jpg">
    </div>
    
    <div class="w-full text-gray-600 text-normal mx-5">
        <p class="border-b py-3">Georgia Gov. Brian Kemp speaks to the media during a press conference. | Kevin C. Cox/Getty Images</p>
    </div> --}}
    
    <div class="w-full text-gray-600 font-thin italic px-5 pt-3 border-b">
        Par <strong class="text-gray-700">{{ $article->user->name }}</strong><br>
        le {{  $article->created_at->format('d|m|Y à H:m:s') }}<br>
        Dernière mise à jour: {{ $article->updated_at->diffForHumans() }}<br>
    </div>
    
    <div class="px-5 w-full mx-auto pt-5 pb-5">
        <p class="text-gray-800 text-xl">{{ $article->body }}</p>
    </div>
</div>
@endsection