<?php
$access_token = 'LWo+NBkri6dqQTeOgvwvkcVfgcgqH8+oalCcCkd5j5rlnEZeyuKiWspveS5sM48zj5iaoQ+AcD2fWS2M2kY4y2fNq4Uf5Zr98Yy9M1VUO1c8WBDwqBpK4kYAu7ONXu7scQmAPUcI1gxSrn0x64/2bAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;