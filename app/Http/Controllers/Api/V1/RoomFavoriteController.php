<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\RoomFavoriteResource;
use App\Http\Resources\Api\V1\RoomResource;
use App\Models\Api\V1\Room;
use App\Models\Api\V1\RoomFavorite;
use App\Models\Api\V1\RoomFavorite as Favorite;
use Illuminate\Support\Facades\Cache;

class RoomFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $room_id = RoomFavorite::select('room_id')->get();

        foreach ($room_id as $id) {

            $arrayComparison[] = RoomFavoriteResource::collection(Room::where('id', '=', $id->room_id)->
            with('image')->
            with('property')->
            with('mortgage')->get());
        }

        return $arrayComparison;

    }

    public function delete($id)
    {
        $room = RoomFavorite::all()
            ->where('room_id', '=', $id);

        RoomFavorite::destroy($room);
        return response([
            'Message' => 'Удалено из избранного'
        ]);
    }

    public function favorite($id)
    {
        if (!Favorite::where(['room_id' => $id])->exists()) {
            Favorite::create(['room_id' => $id]);
        }

        return response([
            'message' => 'Объект добавлен в избранное'
        ], 200);
    }
}
