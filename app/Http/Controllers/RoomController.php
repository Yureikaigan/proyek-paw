<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\GoogleMeet;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jobs\ExpireRoom;


class RoomController extends Controller
{
    public function create()
    {
        return view('rooms.create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
        ]);

        $startTime = Carbon::now();
        $expiresAt = $startTime->copy()->addHours(2);

        // Ambil link Google Meet yang belum dipakai
        $googleMeet = GoogleMeet::where('is_occupied', false)->inRandomOrder()->first();

        if (!$googleMeet) {
            return redirect()->back()->with('error', 'Tidak ada Google Meet yang tersedia.');
        }

        $googleMeet->is_occupied = true;
        $googleMeet->save();

        $room = Room::create([
            'name' => $validated['name'],
            'date' => $startTime,
            'expires_at' => $expiresAt,
            'category' => $validated['category'],
            'google_meet_id' => $googleMeet->id,
        ]);

        // Hapus room + tandai link kembali tersedia setelah 2 jam
        dispatch(new ExpireRoom($room->id, $googleMeet->id))->delay(now()->addHours(2));

        return redirect()->away($googleMeet->link);
    }





    public function index()
    {
        $rooms = Room::with('googleMeet')->latest()->get();
        return view('rooms.index', compact('rooms'));
    }
}
