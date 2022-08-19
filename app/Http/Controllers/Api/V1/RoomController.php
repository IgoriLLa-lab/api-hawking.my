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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {

        Cache::forever('rooms', RoomResource::collection(Room::with('city')->
        with('area')->
        with('street')->
        with('seller')->
        with('image')->
        with('property')->
        with('mortgage')->
        get()));

        return response([
            'rooms' => Cache::get('rooms'),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Api\V1\StoreRoomRequest $request
     * @return Response
     */
    public
    function store(StoreRoomRequest $request): Response|RoomResource
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
     */
    public function show($id): Response
    {
        Cache::forever('one_room', new RoomResource(Room::with('city')->
        with('area')->
        with('street')->
        with('seller')->
        with('image')->
        with('property')->
        with('mortgage')->
        findOrFail($id)));

        return response([
            'room' => Cache::get('one_room'),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Api\V1\UpdateRoomRequest $request
     * @param Room $room
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        print_r('Заглушка метода Update');
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param \App\Http\Requests\Api\V1\UpdateRoomRequest $request
     * @param $id
     */
    public function delete($id)
    {
        print_r('Заглушка метода Delete');
    }


}
