<?php
$post=array('periodType' => 2, 'dateStart' => date("Y-m-d H:i:s", time()), 'dateEnd' => date("Y-m-d H:i:s", time()+86400*365), 'periodCount' => 6);
//print_r($post);
$result=Read('https://us-central1-pulltail-admin.cloudfunctions.net/api/trailers', $post);
header("Content-Type: text/json;");
echo $result;


function Read($url, $post=array())
		{
		$header=array('Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3', 'Connection: keep-alive', 'X-API-Key: x0z1SaAdfas03djy22AQpTm4cgv_e2dAzMqzw1AdzO_04AcvAoETd1x923Ad0_6ZfxIoAd21A23AsPdP12fPT1M');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:36.0) Gecko/20100101 Firefox/36.0");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		if(!empty($post))
			{
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		if($result===false) $error = curl_error($ch);
		else $error=false;
		curl_close($ch);
		return $result;
		}