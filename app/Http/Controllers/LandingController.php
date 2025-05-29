<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('date')->get()->groupBy('category');

        return view('landingpage', compact('rooms'));
    }
}
