<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 
        'place', 
        'description',
        'hashtags',
        'image',
        'like'
    ];
}
