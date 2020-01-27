<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name', 'phone', 'seat', 'time', 'price', 'date', 'cinema', 'city'
    ];
}
