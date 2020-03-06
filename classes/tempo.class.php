<?php
$chave = "f0ffd485";
$cidade = "455892";
//$cidade = "456287";
//$city_name = "Não Me Toque, RS";
//$ip = $_SERVER['REMOTE_ADDR'];
//----------------------------------------------------------------------------------------
/*
$link = "https://api.hgbrasil.com/weather?key=19bc0c77&user_ip=".$ip;
$link = "https://api.hgbrasil.com/weather?key=".$chave."&city_name=".$city_name;

$teste = explode(" ", $link);
$link = $teste[0]."%20".$teste[1];
print_r($teste);

//$link = urlencode($link);
echo $link;
*/
//---------------------------------------------------------------------------------------
$link = "https://api.hgbrasil.com/weather?key=".$chave."&woeid=".$cidade;

$json = file_get_contents($link);
$json = json_decode($json);
$hj = $json->results;
$amanha = $json->results->forecast;

$tempo = $hj->temp."º";
$cond = $hj->condition_slug;
$cidade = $hj->city_name;
$atual = $hj->currently;


if($cond == 'storm'){
	//storm - tempestade
	$imgClimate = "stormB.png";
	$tam = "35";
}
if($cond == 'snow'){
	//storm - tempestade
	$imgClimate = "snowB.png";
	$tam = "35";
}
if($cond == 'hail'){
	//storm - tempestade
	$imgClimate = "hailB.png";
	$tam = "35";
}
if($cond == 'rain'){
	//rain - chuva
	$imgClimate = "rainB.png";
	$tam = "35";
}
if($cond == 'fog'){
	//fog - tempestade
	$imgClimate = "fogB.png";
	$tam = "35";
}

if($cond == 'clear_day'){
	//clear_day - dia limpo
	$imgClimate = "sunB.png";
	$tam = "35";
}

if($cond == 'clear_night'){
	//clear_night - noite limpa
	$imgClimate = "moonB.png";
	$tam = "35";
}

if($cond == 'cloud'){
	//cloud - nublado
	$imgClimate = "cloudB.png";
	$tam = "25";
}
if($cond == 'cloudly_day'){
	//cloudly_day - nublado de dia
	$imgClimate = "dayCloudyB.png";
	$tam = "35";
}

if($cond == 'cloudly_night'){
	//cloudly_night - nublado de noite
	$imgClimate = "moonCloudyB.png";
	$tam = "35";
}

/*
storm - tempestade
snow - neve
hail - granizo
rain - chuva
fog - neblina
clear_day - dia limpo
clear_night - noite limpa
cloud -nublado
cloudly_day - nublado de dia
cloudly_night - nublado de noite

*/
//echo "Tempo: ".$hj->temp."ºC <br/>";
//echo "cidade: ".$hj->city_name."<br/>";
//echo "condição: ".$hj->condition_slug."<br/>";
//echo "dia: ".$hj->currently."<br/>";
//echo $chave;
//echo "horas: ".$hj->time."<br/>";
//foreach($amanha as $item){
//	echo $item->weekday.": min:".$item->min."º max:".$item->max."º o tempo sera: ".$item->description." <br/>";
//}
;

