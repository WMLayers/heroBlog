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

<a href="noticias.php?noticia=<?php echo $link; ?>">
	<div class="bannerI">
		<div class="imgBanner">
			
		</div>
		<div class="titleBanner">
			ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
		</div>
		<div class="listBanner">
			<ul>
				<li>Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</li>
				<li>Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
			</ul>
		</div>
	</div>
</a>
<div class="container">
	
	<?php
	$nots = $HN->getNoticias();
	foreach($nots as $Ni):?>

		<a href="noticias.php?noticia=<?php echo $Ni['link']; ?>"><?php echo $Ni['title']; ?></a><br/><br/>

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