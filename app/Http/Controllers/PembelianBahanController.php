<?php

namespace App\Http\Controllers;

use App\Models\PembelianBahan;
use App\Http\Requests\StorePembelianBahanRequest;
use App\Http\Requests\UpdatePembelianBahanRequest;

class PembelianBahanController extends Controller
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
     * @param  \App\Http\Requests\StorePembelianBahanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePembelianBahanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembelianBahan  $pembelianBahan
     * @return \Illuminate\Http\Response
     */
    public function show(PembelianBahan $pembelianBahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembelianBahan  $pembelianBahan
     * @return \Illuminate\Http\Response
     */
    public function edit(PembelianBahan $pembelianBahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePembelianBahanRequest  $request
     * @param  \App\Models\PembelianBahan  $pembelianBahan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePembelianBahanRequest $request, PembelianBahan $pembelianBahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembelianBahan  $pembelianBahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembelianBahan $pembelianBahan)
    {
        //
    }
}
