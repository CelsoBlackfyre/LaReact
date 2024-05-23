<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmesRequest;
use App\Http\Requests\UpdateFilmesRequest;
use App\Models\Filmes;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Filmes $filmes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filmes $filmes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmesRequest $request, Filmes $filmes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filmes $filmes)
    {
        //
    }
}
