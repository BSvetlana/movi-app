<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'
    ];


    public static function search($title,$take, $skip)
    {
       
            return self::where('title','like','%'. $title .'%')
                        ->skip($skip)
                        ->take($take)
                        ->get();

    }
}
