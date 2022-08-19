<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ComparisonResource;
use App\Models\Api\V1\Comparison;
use App\Models\Api\V1\Room;
use Illuminate\Support\Facades\Cache;

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

            $arrayComparison[] = ComparisonResource::collection(Room::where('id', '=', $id->room_id)->
            with('image')->
            with('property')->
            with('mortgage')->get());

            Cache::forever('array', $arrayComparison);
        }

        return response([
            'room_comparison' => Cache::get('array'),
        ], 200);
    }

    public function delete($id)
    {

        $room = Comparison::all()
            ->where('room_id', '=', $id);

        Cache::forget($room);

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
