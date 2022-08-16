<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'area_id',
        'street_id',
        'seller_id',
        'description',
        'price',
        'images' => 'array',
        'properties' => 'array',
        'mortgage' => 'array',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function property()
    {
        return $this->belongsToMany(Property::class, 'property_rooms');
    }

    public function mortgage()
    {
        return $this->belongsToMany(Mortgage::class, 'mortgages_rooms');
    }

    public function favorite(){

        return $$this->belongsTo(RoomFavorite::class, 'id', 'room_id');
    }

    public function like(){
        return $this->favorite()->selectRaw('room_id,count(*) as count')->groupBy('room_id');
    }
}
