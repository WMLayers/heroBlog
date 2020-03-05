<?php
$chave = "19bc0c77";
$link = "https://api.hgbrasil.com/finance?key=".$chave;

$json = file_get_contents($link);
$json = json_decode($json);

//print_r($json);

$moedas = $json->results->currencies;

foreach ($moedas as $m) {
	echo "nome da moeda: ".$m->name." | valor de compra: ".$m->buy." | valor de venda: ".$m->sell." <br/>";
}