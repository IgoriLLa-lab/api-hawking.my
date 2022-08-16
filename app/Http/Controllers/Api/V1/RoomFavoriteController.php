<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoomFavoriteRequest;
use App\Http\Requests\UpdateRoomFavoriteRequest;
use App\Models\Api\V1\RoomFavorite;

class RoomFavoriteController extends Controller
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
     * @param  \App\Http\Requests\StoreRoomFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomFavoriteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\RoomFavorite  $roomFavorite
     * @return \Illuminate\Http\Response
     */
    public function show(RoomFavorite $roomFavorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\RoomFavorite  $roomFavorite
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomFavorite $roomFavorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomFavoriteRequest  $request
     * @param  \App\Models\Api\V1\RoomFavorite  $roomFavorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomFavoriteRequest $request, RoomFavorite $roomFavorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\RoomFavorite  $roomFavorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomFavorite $roomFavorite)
    {
        //
    }
}
