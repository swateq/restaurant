<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;

class News extends Model
{
    use SoftDeletes, QueryCacheable;
    
    protected $guarded = [''];

    public static function last()
    {
        return News::cacheFor(3000)->where('active','1')->latest()->first();
    }
}
