<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    
    public $timestamps = false;

    protected $casts = [
        'genres' => 'array',
    ];

}
