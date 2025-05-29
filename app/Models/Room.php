<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'date', 'google_meet_id', 'category'];

    public function googleMeet()
    {
        return $this->belongsTo(GoogleMeet::class);
    }
}

