<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public static function search($title = '')
    {
        if(!empty($title)){
            return self::where('title','like','%'. $title .'%')->get();
        }else {
            return self::all();
        }
    }
}
