<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.weather.base_url');
        $this->apiKey = config('services.weather.api_key');
    }

    public function getWeather($city)
    {
        $response = Http::get("{$this->baseUrl}/weather", [
            'q' => $city,
            'appid' => $this->apiKey,
            'units' => 'metric'
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
