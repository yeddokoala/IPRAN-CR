<?php
$access_token = 'adPJyfwDwNKA6ylgrAnqhP9DVdpRF2vaVgo3kds7tyK52S2ahUSJfJ3Da4BODxKoJekQHtCRYJ2i1Sq6wlqpQtlQoYTsICegSB6rfUhk+BtTYnNZUdG5TMDfi2zv5qndtdhqCBOyD4ASEIPuNpXZDAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
