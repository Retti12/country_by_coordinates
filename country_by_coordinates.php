<?php

// Demo token. (Replace it with your token).
$token = 'YOUR_TOKEN_HERE'; 

$latitude = '-37.837617';  // Latitude coordinates
$longitude = '-64.788609'; // Longitude coordinates

$url = 'https://wildtracks.pro/api/polygon/' . $token . '/' . $latitude . '/' . $longitude . '/';

// Get API response
$response = file_get_contents($url);

if ($response === FALSE) {
    die('Error occurred while fetching data.');
}

// Decode JSON
$data = json_decode($response, true);

if ($data === NULL) {
    die('Error decoding JSON.');
}

// Output array
echo "<pre>";
print_r($data);
echo "</pre>";

?>