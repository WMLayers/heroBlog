<?php
require 'classes/noticias.class.php';

$not = new noticias();

$not->addNoticiaC('MP do Paraguai diz que número do passaporte de Ronaldinho pertence a uma mulher', 'G1', 'O comissário da Polícia Nacional paraguaia, César Silguero, disse nesta quinta-feira (5) que os números dos passaportes apreendidos na suíte do ex-jogador Ronaldinho Gaúcho pertencem a duas mulheres de origem paraguaia, moradoras de Assunção.

', 'Investigações apontam que passaportes foram adulterados para receber as informações do ex-jogador e de seu irmão.', 'paraguai', 'https://s2.glbimg.com/C4k3LZO8YJnf7hv6uz761RC_tuo=/0x0:2073x3109/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/y/J/EWonxNR8acU1OCCL0IOg/ronaldinho.jpg');

$data = date('Y-m-d H:i:s');
$dataform = date('Y/m/d/H/i/s', strtotime($data));
$title = "ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.";
$explo = explode(' ', $title);
$implo = implode('-', $explo);

$link = $dataform."/".$implo;

//$am = explode('-', $link);

//echo end($am);



//echo $title."<br/>";
//echo $implo."<br/>";
//echo $hash."<br/><br/>";
//echo $dataform."<br/><br/>";
echo $link;
