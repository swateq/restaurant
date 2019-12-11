<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Newsletter extends Model
{
    use QueryCacheable;
    
    protected $cacheFor = 300;
    protected $fillable = ['email'];

    public static function search($query)
    {
        return Newsletter::dontCache()->where('email','like','%'.$query.'%')->get();
    }
}

