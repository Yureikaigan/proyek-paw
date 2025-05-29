<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil semua rooms dan grup berdasarkan category
        $rooms = Room::orderBy('date')->get()->groupBy('category');

        // Kirim ke view
        return view('landingpage', compact('rooms'));
    }
}

