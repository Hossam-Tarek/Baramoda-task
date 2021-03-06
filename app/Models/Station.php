<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $guarded;

    public function ticketStartStation()
    {
        return $this->belongsTo("\App\Models\Station", "start_station_id");
    }

    public function ticketEndStation()
    {
        return $this->belongsTo("\App\Models\Station", "end_station_id");
    }
}
