<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['email'];


    public static function search($query)
    {
        return Newsletter::where('email','like','%'.$query.'%')->get();
    }
}

