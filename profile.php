<?php


$access_token = 'nCuy0Au7fRsFE+ltZTI7T75MlP+U74Jb1FouPFySMzOAmXxO75Bq6dKDdipyo4rhOgqrX+kvIQMlLgCcut9y692c5VRc17DVMVJqElbEQh6zyv/gJa0qfdkK60VzedFTL7tqKOivu6n+SZRGhoc75QdB04t89/1O/w1cDnyilFU=';

$userId = '82617be1a3978f7a8c802f0844f3124c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

