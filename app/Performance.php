<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
        'user_id',
        'discipline_name',
        'date',
        'total_resolved',
        'number_of_questions',
        'note',
        'hit_percentage',
        'resolved'
    ];

    public function findWare(){
        return $this->findWare();
    }

}
