<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'distance',
        'elevation_gain',
        'difficulty',
        'type',
        'organizer',
        'website',
        'registration_link',
    ];
}
