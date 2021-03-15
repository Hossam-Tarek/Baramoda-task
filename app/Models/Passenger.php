<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    public function tickets()
    {
        return $this->hasMany("\App\Models\Ticket");
    }

    public function phoneNumbers()
    {
        return $this->hasMany("\App\Models\PhoneNumber");
    }
}
