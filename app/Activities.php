<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function questions()
    {
        return $this->hasMany('App\Questions');
    }
}
