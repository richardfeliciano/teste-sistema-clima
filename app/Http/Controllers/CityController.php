<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {

        return City::with(['state'])
            ->where('nome', 'like', '%' . $request->city . '%')
            ->get();
    }
}