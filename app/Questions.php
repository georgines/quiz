<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activities_id',
        'content_of_question',
        'image',
        'a',
        'b',
        'c',
        'd',
        'answer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];



}
