<?php

namespace App\Http\Controllers;

use App\Models\StokKeluar;
use App\Http\Requests\StoreStokKeluarRequest;
use App\Http\Requests\UpdateStokKeluarRequest;

class StokKeluarController extends Controller
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
     * @param  \App\Http\Requests\StoreStokKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStokKeluarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StokKeluar  $stokKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(StokKeluar $stokKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StokKeluar  $stokKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(StokKeluar $stokKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStokKeluarRequest  $request
     * @param  \App\Models\StokKeluar  $stokKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStokKeluarRequest $request, StokKeluar $stokKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StokKeluar  $stokKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(StokKeluar $stokKeluar)
    {
        //
    }
}
