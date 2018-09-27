<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
        'user_id',
        'note',
        'date',
        'resolved'
    ];

    public function findWare(){
        return $this->findWare();
    }

}
