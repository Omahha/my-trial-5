<?php

require "./vendor/autoload.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('8J5+vrtRTwWVcnUL1R1RZeLycFPJ6GMHn3QJLtzz1KrRypTNGymM7M/Y5FZ+0Mai5AuF0mw5O/XQ0p6oT/U0cOx2pwtsiYrFj5g2wd0Mc0kBoIOHQYYprw3qX3nj9ow/ZZ0zGfHIV/bqIJjmPM8elwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '111cabd3f125c2905df4a6c4f14b1b72']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('C93e6dd2670c62d4c028ebbaf23051667', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();