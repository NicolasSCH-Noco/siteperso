@extends('app.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
<div class='max-w-md mx-auto space-y-6 pb-10'>    
    <form action="{{ route('articles.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="uppercase text-sm font-bold opacity-70" for="title">Titre</label>
            <input type="text"
                class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="title" name="title" placeholder="Titre de l'article" value="{{ $article->title }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="uppercase text-sm font-bold opacity-70" for="body">Contenu</label>
            <textarea class="w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                id="body" name="body" rows="3"></textarea>
            @error('body')
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


@section('scripts')

<script>
var editor;
    ClassicEditor
        .create( document.querySelector( '#body' ), {
            toolbar: [ 'heading', 'indent', '|', 'bold', 'italic', 'underline', '|', 'uploadImage','link', 'undo', 'redo', '|', 'numberedList', 'bulletedList', 'blockQuote', 'insertTable', '|', 'code', 'codeBlock', 'imageUpload', 'mediaEmbed' ],
        })
            .then( editor => {
                    editor = editor;
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );

            $().on('load', function() {
  editor.setData({{ $article->body }});
})
</script>
@endsection