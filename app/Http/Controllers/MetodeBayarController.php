<?php

namespace App\Http\Controllers;

use App\Models\MetodeBayar;
use App\Http\Requests\StoreMetodeBayarRequest;
use App\Http\Requests\UpdateMetodeBayarRequest;

class MetodeBayarController extends Controller
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
     * @param  \App\Http\Requests\StoreMetodeBayarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetodeBayarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MetodeBayar  $metodeBayar
     * @return \Illuminate\Http\Response
     */
    public function show(MetodeBayar $metodeBayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MetodeBayar  $metodeBayar
     * @return \Illuminate\Http\Response
     */
    public function edit(MetodeBayar $metodeBayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetodeBayarRequest  $request
     * @param  \App\Models\MetodeBayar  $metodeBayar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetodeBayarRequest $request, MetodeBayar $metodeBayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MetodeBayar  $metodeBayar
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetodeBayar $metodeBayar)
    {
        //
    }
}
