<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoogleMeet extends Model
{
    protected $fillable = ['link', 'occupied'];

    public function room()
    {
        return $this->hasOne(Room::class);
    }
}
