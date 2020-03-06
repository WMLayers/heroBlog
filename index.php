<?php
$title = "Home";
$link1 = '<a href="#" class="assL">CADASTRE-SE</a>';
$link2 = '<a href="login.php" class="LL">LOGIN</a>';	
require 'templates/head.php';
require 'classes/tempo.class.php';
require 'templates/menuTop.php';

//require 'teste.php';

require 'classes/noticias.class.php';

$HN = new noticias();
?>


<div class="container IndexJ">
	
	<?php
	$nots = $HN->getNoticias();
	foreach($nots as $Ni):?>

		<a href="noticias.php?noticia=<?php echo $Ni['link']; ?>">
			<div class="IndJ">
				<?php 
					if($Ni['img'] == ''){
						echo "";
					}else{
						?>
						<div class="bannerimg">
							<img src="<?php echo $Ni['img']; ?>" class="imgIndexBanner" height="200">
							<div class="classIndex">[<?php echo strtoupper($Ni['local']); ?>]</div>
						</div>
						<?php
					} 
				?>
				<div class="noticiaIndex">
					<div class="titleIndexN"><?php echo $Ni['title']; ?></div>
					<div class="resumoIndexN"><?php echo $Ni['noticiaR']; ?></div>
					<div class="autorIndexN">Por <?php echo strtoupper($Ni['autor']); ?></div>
				</div>	
			</div>
		</a><br/><br/>

	<?php endforeach; ?>


</div>

<?php
require 'templates/foot.php';
?>
<Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.