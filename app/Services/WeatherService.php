<?php

namespace App\Services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getWeather($city)
    {
        $apiKey = config('services.weather.api_key');
        $apiUrl = config('services.weather.base_url');

        $url = "{$apiUrl}/weather?q={$city}&appid={$apiKey}&units=metric";

        $response = $this->client->get($url, [
            'verify' => false // Disable to not have problems with SSL (Test Environment)
        ]);

        return json_decode($response->getBody(), true);
    }
}
