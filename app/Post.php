<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title',
        'description',
        'category-id',
        'published_at',
        'slug',
    ];


    public function addcategory(){
        return $this->hasMany('App\Category');
    }
}

