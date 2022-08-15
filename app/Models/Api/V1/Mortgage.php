<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortgage extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsToMany(Room::class, 'mortgages_rooms');
    }
}
