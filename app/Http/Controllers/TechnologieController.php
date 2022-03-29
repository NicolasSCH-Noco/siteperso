<?php

namespace App\Http\Controllers;

use App\Models\Technologie;
use App\Http\Requests\StoreTechnologieRequest;
use App\Http\Requests\UpdateTechnologieRequest;

class TechnologieController extends Controller
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
     * @param  \App\Http\Requests\StoreTechnologieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnologieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function show(Technologie $technologie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function edit(Technologie $technologie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnologieRequest  $request
     * @param  \App\Models\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnologieRequest $request, Technologie $technologie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technologie $technologie)
    {
        //
    }
}
