@extends('app.app')

@section('title')
    Création de tags
@endsection

@section('content')
<div class='max-w-md mx-auto space-y-6 pb-10'>    
    <form action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="uppercase text-sm font-bold opacity-70" for="label">Nom</label>
            <input type="text"
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="label" name="label" placeholder="Titre de l'article">
            @error('label')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="color">Couleur</label>
            <input type="color" name="color" id="color">
            @error('color')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

           

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