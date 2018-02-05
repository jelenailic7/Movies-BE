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

    public static function search($term)
    {
       // return self::where('name','LIKE','%' .$term.'%')->get();
        return self::where('name','LIKE','%' .$term.'%')->skip($skip)->take($take)->get();

    }
}
