<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreRoomRequest;
use App\Http\Requests\Api\V1\UpdateRoomRequest;
use App\Http\Resources\Api\V1\RoomResource;
use App\Models\Api\V1\Image;
use App\Models\Api\V1\Mortgage;
use App\Models\Api\V1\Property;
use App\Models\Api\V1\Room;
use Database\Seeders\ImageSeeder;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RoomResource::collection(Room::with('city')->
        with('area')->
        with('street')->
        with('seller')->
        with('image')->
        with('property')->
        with('mortgage')->
        paginate());
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
     * @param \App\Http\Requests\Api\V1\StoreRoomRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {
        $valReq = $request->validated();

        $room = Room::create([
            'city_id' => $valReq['city_id'],
            'area_id' => $valReq['area_id'],
            'street_id' => $valReq['street_id'],
            'seller_id' => $valReq['seller_id'],
            'description' => $valReq['description'],
            'price' => $valReq['price'],
        ]);

        $images = [];
        foreach ($request->images as $image) {
            $images[] = new Image($image);
        }

        $room->image()->saveMany($images);

        $property = Property::find($valReq['properties']);
        if ($property) {
            $room->property()->attach($property);
        };

        $mortgage = Mortgage::find($valReq['mortgages']);
        if ($mortgage) {
            $room->mortgage()->attach($mortgage);
        };

        return new RoomResource($room);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Api\V1\Room $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new RoomResource(Room::with('city')->
        with('area')->
        with('street')->
        with('seller')->
        with('image')->
        with('property')->
        with('mortgage')->
        findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Api\V1\Room $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Api\V1\UpdateRoomRequest $request
     * @param \App\Models\Api\V1\Room $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Api\V1\Room $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
