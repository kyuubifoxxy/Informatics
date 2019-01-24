<?php
$access_token = 'VFJPDkes6v+d3I8qINrxZ70rJJP1tUBUr7x/jOXjnFeLvS20bi6A++cDyixDbmjtI9bxaxgIbQkgaeMwvqJreEgcA9h2ps1BAGchgMLzmEEwi7QZFKt/GjW3GzYlOplvYke2vD4sTd5P8REBXBkUfQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
