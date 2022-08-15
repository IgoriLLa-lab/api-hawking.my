<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreMortgagesRoomRequest;
use App\Http\Requests\Api\V1\UpdateMortgagesRoomRequest;
use App\Models\Api\V1\MortgagesRoom;

class MortgagesRoomController extends Controller
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
     * @param  \App\Http\Requests\Api\V1\StoreMortgagesRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMortgagesRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\MortgagesRoom  $mortgagesRoom
     * @return \Illuminate\Http\Response
     */
    public function show(MortgagesRoom $mortgagesRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\MortgagesRoom  $mortgagesRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(MortgagesRoom $mortgagesRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\UpdateMortgagesRoomRequest  $request
     * @param  \App\Models\Api\V1\MortgagesRoom  $mortgagesRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMortgagesRoomRequest $request, MortgagesRoom $mortgagesRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\MortgagesRoom  $mortgagesRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(MortgagesRoom $mortgagesRoom)
    {
        //
    }
}
