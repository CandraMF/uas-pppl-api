<?php

namespace App\Http\Controllers;

use App\Models\Komposisi;
use App\Http\Requests\StoreKomposisiRequest;
use App\Http\Requests\UpdateKomposisiRequest;

class KomposisiController extends Controller
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
     * @param  \App\Http\Requests\StoreKomposisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKomposisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komposisi  $komposisi
     * @return \Illuminate\Http\Response
     */
    public function show(Komposisi $komposisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komposisi  $komposisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Komposisi $komposisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKomposisiRequest  $request
     * @param  \App\Models\Komposisi  $komposisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKomposisiRequest $request, Komposisi $komposisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komposisi  $komposisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komposisi $komposisi)
    {
        //
    }
}
