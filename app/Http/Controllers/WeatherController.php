<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show($city)
    {
        try {
            $weatherData = $this->weatherService->getWeather($city);

            if ($weatherData) {
                return view('weather.show', ['weather' => $weatherData]);
            } else {
                return view('weather.error')->with('message', 'Weather data not available');
            }
        } catch (\Exception $e) {
            return view('weather.error')->with('message', 'Error: ' . $e->getMessage());
        }
    }
}
