<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ComparisonResource;
use App\Http\Resources\Api\V1\RoomResource;
use App\Models\Api\V1\Comparison;
use App\Models\Api\V1\Room;

class ComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_id = Comparison::select('room_id')->get();

        foreach ($room_id as $id) {
            $arrayComparison[] = Room::where('id', '=', $id->room_id)->with('city')->
            with('area')->
            with('street')->
            with('seller')->
            with('image')->
            with('property')->
            with('mortgage')->get();
        }

        return response([
            'data' => new ComparisonResource($arrayComparison),
        ]);
    }

    public function delete($id){

        $room = Comparison::all()
            ->where('room_id', '=', $id);

        Comparison::destroy($room);
        return response([
            'Message' => 'Deleted - ' . $room . 'квартира'
        ]);

    }

    public function compare($id)
    {
        if (!Comparison::where(['room_id' => $id])->exists()) {
            Comparison::create(['room_id' => $id]);
        }

        return response([
            'message' => 'Объект добавлен в сравнение'
        ], 200);
    }
}
