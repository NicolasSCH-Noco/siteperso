<?php

namespace App\Http\Controllers;

use App\Models\Tutoriel;
use App\Http\Requests\StoreTutorielRequest;
use App\Http\Requests\UpdateTutorielRequest;

class TutorielController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTutorielRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorielRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutoriel  $tutoriel
     * @return \Illuminate\Http\Response
     */
    public function show(Tutoriel $tutoriel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutoriel  $tutoriel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutoriel $tutoriel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorielRequest  $request
     * @param  \App\Models\Tutoriel  $tutoriel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutorielRequest $request, Tutoriel $tutoriel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutoriel  $tutoriel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutoriel $tutoriel)
    {
        //
    }
}
