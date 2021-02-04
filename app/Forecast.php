<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    protected $appends = ['dia'];
    protected $table = 'previsao_clima';

    public function city()
    {
        return $this->belongsTo(City::class, 'cidade_id', 'id');
    }

    public function getDataPrevisaoAttribute($value)
    {
        return Carbon::createFromDate($value)
            ->format('d/m/Y');
    }

    public function getDiaAttribute()
    {
        return Carbon::createFromDate($this->attributes['data_previsao'])
            ->isoFormat('dddd');
    }
}