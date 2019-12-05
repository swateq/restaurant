<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    
    protected $guarded = [''];

    public static function last()
    {
        $news = new News();
        return $news->where('active','1')->latest()->first();
    }
}
