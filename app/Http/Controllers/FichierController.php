<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Http\Requests\StoreFichierRequest;
use App\Http\Requests\UpdateFichierRequest;
use Illuminate\Support\Facades\Storage;

class FichierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFichierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFichierRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt,odt,odp,ods,odg,odc,odf,odb,odm,csv,rtf,html,htm,zip,rar,7z,tar',
        ]);
        $name = $request->file('file')->getClientOriginalName();
        $size = $request->file('file')->getSize();
        $path = $request->file('file')->storeAs('public/fichiers', $name);
        $path= str_replace('public/', '', $path);
 
        $fichier = Fichier::create([
            'name' => $name,
            'path' => $path,
            'taille' => $size,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/')->with("success", "Le fichier a bien été ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function show(Fichier $fichier)
    {
        
        return \Response::download('storage/'.$fichier->path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function edit(Fichier $fichier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFichierRequest  $request
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFichierRequest $request, Fichier $fichier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fichier $fichier)
    {
        //
    }
}
