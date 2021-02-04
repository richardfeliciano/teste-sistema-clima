<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'cidade';

    public function state()
    {
        return $this->belongsTo(State::class, 'estado_id', 'id');
    }
}