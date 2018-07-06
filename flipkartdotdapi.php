<!--
Name:  Flipkart DOTD Offers Fetcher
Author: Adithya Sreyak
Website: https://sreyaj.com
License: Apache License 2.0
Technology: php + cURL + JSON
-->
<?php
$curl = curl_init();
$affiliateid = "Enter Your Affiliate ID here";
$apitoken = "Enter the API Key Here";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => FALSE,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Fk-Affiliate-Id:".$affiliateid,
    "Fk-Affiliate-Token:".$apitoken
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$data = json_decode($response,true);
$dotd = $data["dotdList"];
$num = count($dotd);
for($x=0;$x<$num;$x++){
    $dealimage[$x] = $dotd[$x]["imageUrls"][0]["url"];
    $dealtitle[$x] = $dotd[$x]["title"];
    $dealdesc[$x] =  $dotd[$x]["description"];
    $dealname[$x] = $dotd[$x]["name"];
    $deallink[$x] = $dotd[$x]["url"];
    $dealstatus[$x] = $dotd[$x]["availability"];
}
}
?>