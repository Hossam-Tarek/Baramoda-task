<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function passenger()
    {
        return $this->belongsTo("\App\Models\Passenger");
    }

    public function startStation()
    {
        return $this->hasOne("\App\Models\Station");
    }

    public function endStation()
    {
        return $this->hasOne("\App\Models\Station");
    }

    public function price()
    {
        return $this->belongsTo("\App\Models\Ticket");
    }
}
