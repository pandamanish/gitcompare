<?php

$fields = array(
            'username'=>'',
            
            );
            
$methd="GET";
$data=http_build_query($fields);


$curl = curl_init();
	$headers[]="accept:*/*";
	$headers[]="connection:keep-Alive";
	curl_setopt_array($curl,[
	CURLOPT_RETURNTRANSFER=>1,
	
	CURLOPT_URL =>('https://api.github.com/users'.($username)),
	CURLOPT_USERAGENT=>'GITHUB API IN CURL',
	CURLOPT_HTTPHEADER
]);
$response=curl_exec($curl);

echo($response);
;


?>