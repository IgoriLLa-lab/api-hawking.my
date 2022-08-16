<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\RoomResource;
use App\Models\Api\V1\Room;
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\RoomFavorite  $roomFavorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $roomFavorite)
    {
        //
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
