<?php
$chave = "19bc0c77";
$cidade = "455892";
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
	$imgClimate = "storm.png";
	$tam = "35";
}
if($cond == 'snow'){
	//storm - tempestade
	$imgClimate = "storm.png";
	$tam = "35";
}
if($cond == 'hail'){
	//storm - tempestade
	$imgClimate = "storm.png";
	$tam = "35";
}
if($cond == 'rain'){
	//rain - chuva
	$imgClimate = "rain.png";
	$tam = "35";
}
if($cond == 'fog'){
	//fog - tempestade
	$imgClimate = "storm.png";
	$tam = "35";
}

if($cond == 'clear_day'){
	//clear_day - dia limpo
	$imgClimate = "sun.png";
	$tam = "35";
}

if($cond == 'clear_night'){
	//clear_night - noite limpa
	$imgClimate = "moon.png";
	$tam = "35";
}

if($cond == 'cloud'){
	//cloud - nublado
	$imgClimate = "cloud.png";
	$tam = "25";
}
if($cond == 'cloudly_day'){
	//cloudly_day - nublado de dia
	$imgClimate = "dayCloudy.png";
	$tam = "35";
}

if($cond == 'cloudly_night'){
	//cloudly_night - nublado de noite
	$imgClimate = "moonCloudy.png";
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
//echo "horas: ".$hj->time."<br/>";
//foreach($amanha as $item){
//	echo $item->weekday.": min:".$item->min."º max:".$item->max."º o tempo sera: ".$item->description." <br/>";
//}
;

