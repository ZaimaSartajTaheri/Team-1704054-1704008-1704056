<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = [
        'name', 'address','city_id', 'subcity_id',
    ];
}