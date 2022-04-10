@extends('app.app')

@section('title')
    Création d'un article
@endsection

@section('content')
<div class='max-w-md mx-auto space-y-6 pb-10'>    
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="uppercase text-sm font-bold opacity-70" for="title">Titre</label>
            <input type="text"
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="title" name="title" placeholder="Titre de l'article">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="body">Contenu</label>
            <textarea class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="body" name="body" rows="3"></textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="img">Image</label>
            <input type="file" class="form-control-file" id="img" name="img">
            @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="img_description">Description de l'image</label>
            <input type="text"
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="img_description" name="img_description" placeholder="Description de l'image">
            @error('img_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="tag">Tag</label>
            <select
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="tag_id" name="tag_id">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->label }}</option>
                @endforeach
            </select>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Créer
                    </button>
                </div>
        </div>
    </form>
</div>

@endsection
