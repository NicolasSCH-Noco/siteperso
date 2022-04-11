@extends('app.app')

@section('title')
    Création d'un fichier
@endsection

@section('content')
@extends('app.app')

@section('title')
    Création d'un tutoriel
@endsection

@section('content')
<div class='max-w-md mx-auto space-y-6 pb-10'>    
    <form action="{{ route('fichiers.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="uppercase text-sm font-bold opacity-70" for="name">Nom lié au fichier</label>
            <input type="text"
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none" id="name" name="name" placeholder="Nom lié au fichier">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="file">Fichiers</label><br>
            <input type="file" class="form-control-file" id="file" name="file" ><br>
            @error('file')
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
