<?php
function FETCHQUOTE(){
//Replace with the preference quote API url
$url="http://api.quotable.io/random";
curl = curl_init($url);
$curl = curl_setopt($curl,CURLOPT_RESPONSETRANSFER,true);
$response=curl_exec($curl)
curl_close($curl)

$data=
json_decode($response)
$quote =FETCHQUOTE()
<p>$quote<\p>
}