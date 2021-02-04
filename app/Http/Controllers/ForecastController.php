<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ForecastRepository;

class ForecastController extends Controller
{
    private $forecast;

    public function __construct(ForecastRepository $forecast)
    {
        return $this->forecast = $forecast;
    }

    public function cities($forecast)
    {
        if ($forecast === 'warm') {
            return $this->forecast->getMostWarmCites();
        }

        if ($forecast === 'cold') {
            return $this->forecast->getMostWarmCites();
        }

        return response(['msg' => 'not found'], 404);
    }

    public function days(Request $request)
    {
        $city = $request->city;
        return $this->forecast->getNextSevenDaysForeCast($city);
    }
}