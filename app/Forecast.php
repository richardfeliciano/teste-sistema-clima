<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    protected $table = 'previsao_clima';

    public function city()
    {
        return $this->belongsTo(City::class, 'cidade_id', 'id');
    }
}