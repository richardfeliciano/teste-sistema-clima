<?php

namespace App\Repositories;

use App\Forecast;
use Carbon\Carbon;

class ForecastRepository
{
    private $model;

    public function __construct(Forecast $forecast)
    {
        $this->model = $forecast;
    }

    public function getMostWarmCites()
    {
        return $this->model
            ->with(['city', 'city.state'])
            ->whereDate('data_previsao', Carbon::now())
            ->orderBy('temperatura_maxima', 'DESC')
            ->take(3)
            ->get();
    }

    public function getMostColdCites()
    {
        return $this->model
            ->with(['city', 'city.state'])
            ->whereDate('data_previsao', Carbon::now())
            ->orderBy('temperatura_minima')
            ->take(3)
            ->get();
    }

    public function getNextSevenDaysForeCast($city = 1)
    {
        $now = Carbon::now();

        return $this->model
            ->with(['city', 'city.state'])
            ->where('cidade_id', $city)
            ->whereBetween('data_previsao', [
                $now->format('Y-m-d H:i:s'),
                $now->addDays(7)->format('Y-m-d H:i:s')
            ])
            ->orderBy('temperatura_minima')
            ->get();
    }
}