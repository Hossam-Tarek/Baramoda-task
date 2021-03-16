<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded;

    public function passenger()
    {
        return $this->belongsTo("\App\Models\Passenger");
    }

    public function startStation()
    {
        return $this->belongsTo("\App\Models\Station", "start_station_id");
    }

    public function endStation()
    {
        return $this->belongsTo("\App\Models\Station", "end_station_id");
    }

    public function price()
    {
        return $this->belongsTo("\App\Models\Price");
    }
}
