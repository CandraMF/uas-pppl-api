<?php

namespace App\Http\Controllers;

use App\Models\JenisMenu;
use App\Http\Requests\StoreJenisMenuRequest;
use App\Http\Requests\UpdateJenisMenuRequest;

class JenisMenuController extends Controller
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
     * @param  \App\Http\Requests\StoreJenisMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function show(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisMenuRequest  $request
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisMenuRequest $request, JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMenu $jenisMenu)
    {
        //
    }
}
