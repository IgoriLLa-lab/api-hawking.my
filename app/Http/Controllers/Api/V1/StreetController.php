<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreStreetRequest;
use App\Http\Requests\Api\V1\UpdateStreetRequest;
use App\Models\Api\V1\Street;

class StreetController extends Controller
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
     * @param  \App\Http\Requests\Api\V1\StoreStreetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function show(Street $street)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function edit(Street $street)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\UpdateStreetRequest  $request
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreetRequest $request, Street $street)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function destroy(Street $street)
    {
        //
    }
}
