<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use App\Http\Requests\StorePromosiRequest;
use App\Http\Requests\UpdatePromosiRequest;

class PromosiController extends Controller
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
     * @param  \App\Http\Requests\StorePromosiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromosiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promosi  $promosi
     * @return \Illuminate\Http\Response
     */
    public function show(Promosi $promosi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promosi  $promosi
     * @return \Illuminate\Http\Response
     */
    public function edit(Promosi $promosi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromosiRequest  $request
     * @param  \App\Models\Promosi  $promosi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromosiRequest $request, Promosi $promosi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promosi  $promosi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promosi $promosi)
    {
        //
    }
}
