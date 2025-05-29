<?php

namespace App\Jobs;

use App\Models\Room;
use App\Models\GoogleMeet;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ExpireRoom implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $roomId;
    protected $meetId;

    public function __construct($roomId, $meetId)
    {
        $this->roomId = $roomId;
        $this->meetId = $meetId;
    }

    public function handle()
    {
        $room = Room::find($this->roomId);
        $meet = GoogleMeet::find($this->meetId);

        if ($room) {
            $room->delete();
        }

        if ($meet) {
            $meet->is_occupied = false;
            $meet->save();
        }
    }
}
