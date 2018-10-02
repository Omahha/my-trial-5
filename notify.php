<?php
$token = "pLglay37JbcDhaEffod1jaWkR9398k3Xh6HaSTka6DG";
$str = "猫";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "httpls://notify-api.line.me/api/notify",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "message=".$str,
    CURLOPT_HTTPHEADER => array(
        "Authentication: Bearer ".$token,
        "Cache-control: no-cache",
        "Control-type: application/x-www-form-urlencoded"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if($err){
    echo "curl Error #:". $err;
}else{
    echo $response;
}
