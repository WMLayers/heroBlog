<?php
require 'classes/noticias.class.php';

$not = new noticias();



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
echo $link."<br/><br/>";

$texto = "A Defesa Civil do Estado de São Paulo e o Corpo de Bombeiros elevaram para 42 o número de desaparecidos após as chuvas na Baixada Santista, no litoral de São Paulo. 

O temporal começou na noite de segunda-feira (2) e se seguiu até a madrugada de terça-feira (3). As equipes de buscas já encontraram 28 pessoas mortas, vítimas dos deslizamentos de terra causados pela forte chuva.

Nesta quinta-feira, o número de desaparecidos subiu em Guarujá de 16 para 37. 

Segundo a Defesa Civil e o Corpo de Bombeiros, as autoridades fizeram o cruzamento das listas de moradores do Morro Barreira do João Guarda do Programa Saúde da Família e da Defesa Civil. 

Ainda segundo as autoridades, mais de 50 casas foram atingidas pelo deslizamento no bairro, por isso, é possível que esse número de desaparecidos suba ainda mais.

'Todas as pessoas que foram dadas como desaparecidas pelos familiares foram contabilizadas com base em dados dos órgãos de saúde, assistência social e Defesa Civil, além do Corpo de Bombeiros, em uma contagem única para facilitar esse balanço', disse o Capitão Marcos Palumbo, porta-voz do Corpo de Bombeiros do Estado de São Paulo.

Ainda segundo a Defesa Civil, além dos 37 desaparecidos em Guarujá, há 5 em Santos e 1 em São Vicente.";

$tex = explode('.', $texto);
$n = 0;
$max = 0;
$tn = count($tex);
//echo $tn;
foreach($tex as $t){
	if($max == 2){
		$max = 0;
		echo $tex[$n].".<br/><br/><br/>";
		$n++;
	}else{
		$max++;
		echo $tex[$n].".";
		$n++;
	}
	
	
}

http://projetox.pc/hero/0