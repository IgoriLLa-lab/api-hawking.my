<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFavorite extends Model
{
    use HasFactory;

    protected $fillable = ['room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
