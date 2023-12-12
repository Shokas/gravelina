<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BicycleType extends Model
{
    protected $fillable = [
        'short_name',
        'name',
        'description',
    ];

    protected $primaryKey = 'name';

    public $incrementing = true;

    public $keyType = 'string';
}
