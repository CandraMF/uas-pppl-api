<?php

namespace App\Http\Controllers;

use App\Models\DetailProduk;
use App\Http\Requests\StoreDetailProdukRequest;
use App\Http\Requests\UpdateDetailProdukRequest;

class DetailProdukController extends Controller
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
     * @param  \App\Http\Requests\StoreDetailProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailProdukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function show(DetailProduk $detailProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailProduk $detailProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailProdukRequest  $request
     * @param  \App\Models\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailProdukRequest $request, DetailProduk $detailProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailProduk $detailProduk)
    {
        //
    }
}
