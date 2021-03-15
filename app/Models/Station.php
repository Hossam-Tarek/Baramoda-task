<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public function ticketStartStation()
    {
        return $this->belongsTo("\App\Models\Station");
    }

    public function ticketEndStation()
    {
        return $this->belongsTo("\App\Models\Station");
    }
}
