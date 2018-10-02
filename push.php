<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('weCV1UB0jNHZOHIjosN0Cz5kCJ/mkiudeXUsYV7lBDtClTi3PmMDfhp9S3OMZJ3/K5fAtQFE0eE14KwVBojZKab9gqsurO81WYb7t73zvN1fRVdtfLuulXRxWH0441g1DfFZeb3Kdco5d6sfbABn1QdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '2bc86a87dc5a71bf884791a3b52e67b8']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('C93e6dd2670c62d4c028ebbaf23051667', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();