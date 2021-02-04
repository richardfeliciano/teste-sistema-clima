<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'estado';

    public function cities()
    {
        return $this->hasMany(City::class, 'estado_id', 'id');
    }
}