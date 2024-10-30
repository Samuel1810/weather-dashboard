<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather in {{ $weather['name'] }}</title>
</head>
<body>
    <h1>Weather in {{ $weather['name'] ?? 'Unknown Location' }}</h1>
    <p>Temperature: {{ $weather['main']['temp'] ?? 'N/A' }}°C</p>
    <p>Humidity: {{ $weather['main']['humidity'] ?? 'N/A' }}%</p>
    <p>Wind Speed: {{ $weather['wind']['speed'] ?? 'N/A' }} m/s</p>
</body>
</html>
