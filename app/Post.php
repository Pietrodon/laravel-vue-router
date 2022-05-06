<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title',
        'description',
        'published_at',
        'slug',
    ];
}
