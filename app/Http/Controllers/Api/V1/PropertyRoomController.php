<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StorePropertyRoomRequest;
use App\Http\Requests\Api\V1\UpdatePropertyRoomRequest;
use App\Models\Api\V1\PropertyRoom;

class PropertyRoomController extends Controller
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
     * @param  \App\Http\Requests\Api\V1\StorePropertyRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\PropertyRoom  $propertyRoom
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyRoom $propertyRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\PropertyRoom  $propertyRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyRoom $propertyRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Api\V1\UpdatePropertyRoomRequest  $request
     * @param  \App\Models\Api\V1\PropertyRoom  $propertyRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRoomRequest $request, PropertyRoom $propertyRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\PropertyRoom  $propertyRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyRoom $propertyRoom)
    {
        //
    }
}
