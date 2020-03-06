<?php
$link = $_GET['noticia'];
$semMaterialize = 'false';	
require 'classes/noticias.class.php';
$not = new noticias();
$N = $not->getNoticiaCompleta($link);
$data = date('d.m.Y', strtotime($N['data']));
$horas = date('H:i', strtotime($N['data']));


$title = "HN - ".$N['title'];
$link1 = '<a href="#" class="assL">CADASTRE-SE</a>';
$link2 = '<a href="login.php" class="LL">LOGIN</a>';	
require 'templates/head.php';
require 'classes/tempo.class.php';
require 'templates/menuTop.php';



?>

<div class="localN">
	NOTICIAS | <?php echo strtoupper($N['local']); ?>
</div>
<div class="titleN">
	<?php echo $N['title']; ?>
</div>
<div class="notiAbN">
	<?php echo $N['noticiaR']; ?>
</div>
<div class="porN">
	<div class="autorN">Por <?php echo strtoupper($N['autor']); ?> <i class="small material-icons">email</i></div>
	<div class="dateN">Última atualização: <?php echo $data; ?> ás <?php echo $horas; ?></div>
</div>
<div class="container notN">
	<?php
	if($N['img'] == ''){
		echo "";
	}else{
		?>
		<div class="imgN">
			<img src="<?php echo $N['img']; ?>" height="500">
		</div>
		<?php
	}
	?>
	
	<div class="noticiaN">
		<div class="textoN">
			<?php echo $N['noticiaC']; ?>
		</div>
	</div>

</div>


<?php
require 'templates/rodape.php';
require 'templates/foot.php';
?>
<Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.