<?php
$title = "Home";
$link1 = '<a href="#" class="assL">CADASTRE-SE</a>';
$link2 = '<a href="login.php" class="LL">LOGIN</a>';
$semMaterialize = 'false';	
require 'templates/head.php';
require 'classes/tempo.class.php';
require 'templates/menuTop.php';

//require 'teste.php';

require 'classes/noticias.class.php';

$HN = new noticias();
?>

<div class="row">
<?php
	$Index = $HN->getNoticias();
	$banner = 0;
	foreach($Index as $NT):
		if($banner == 1){

		}else{
?>
	<div class="col s10 offset-s1 BannerIndex" style="background-image: url(<?php echo $NT['img']; ?>); ">
		<div class="degradeBannerIndex">
			<a href="noticias.php?noticia=<?php echo $NT['link']; ?>">
				<div class="generoBannerIndex"><span><?php echo $NT['local']; ?></span></div>
				<div class="titleBannerIndex"><?php echo $NT['title']; ?></div>
				<div class="porBannerIndex"><?php echo "Por - <b>".strtoupper($NT['autor'])."</b>"; ?></div>
			</a>
		</div>
	</div>
<?php
			$banner++;
		}
	endforeach;
?>
	<div class="col s6 offset-s1 maisVisualizado">
		<div class="row">
		<?php
			$Import = $HN->getNoticiaView();
			$visualizado = 0;
			foreach($Import as $VZ):
				if($visualizado == 0){
					?>
						<div class="s12 visualizadoMiniBanner" style="background-image: url(<?php echo $VZ['img']; ?>);">
							<a href="noticias.php?noticia=<?php echo $VZ['link']; ?>">
								<div class="degradeMiniBanner">
									<div class="generoBannerIndex"><span><?php echo $VZ['local']; ?></span></div>
									<div class="titleMiniBanner"><?php echo $VZ['title']; ?></div>
									<div class="visuMiniBanner"><i class='tiny material-icons'>visibility</i><?php echo $VZ['view']; ?></div>
								</div>
							</a>
						</div>
					<?php
					$visualizado++;
				}elseif($visualizado == 1){
					?>
					<a href="noticias.php?noticia=<?php echo $VZ['link']; ?>">
						<div class="col s6 visuDiv">
							<div class="visuDivImg" style="background-image: url(<?php echo $VZ['img']; ?>)"></div>
							<div class="titleDiv"><?php echo $VZ['title']; ?></div>
							<div class="porDiv"><?php echo "Por ".strtoupper($VZ['autor']); ?></div>
							<div style="display: flex; align-items: center;  justify-content: space-around;">
								<div class="generoDiv"><span><?php echo $VZ['local']; ?></span></div>
								<div class="visuDiv"><i class='tiny material-icons'>visibility</i><?php echo $VZ['view']; ?></div>
							</div>
						</div>
					</a>
					<?php
					$visualizado++;
				}elseif($visualizado == 2){
					?>
					<a href="noticias.php?noticia=<?php echo $VZ['link']; ?>">
						<div class="col s6 visuDiv">
							<div class="visuDivImg" style="background-image: url(<?php echo $VZ['img']; ?>)"></div>
							<div class="titleDiv"><?php echo $VZ['title']; ?></div>
							<div class="porDiv"><?php echo "Por ".strtoupper($VZ['autor']); ?></div>
							<div style="display: flex; align-items: center; justify-content: space-around;">
								<div class="generoDiv"><span><?php echo $VZ['local']; ?></span></div>
								<div class="visuDiv"><i class='tiny material-icons'>visibility</i><?php echo $VZ['view']; ?></div>
							</div>
						</div>
					</a>
					<?php
					$visualizado++;
				}
		?>

		<?php
			endforeach;
		?>
		</div>
	</div>
<?php
	$Recente = $HN->getNoticias();
	$ADD = 0;
	foreach($Recente as $RC):
		if($ADD == 0){
			$ADD++;
		}elseif($ADD == 1){
		?>
			<div class="col s4 addRecente" style="background-image: url(<?php echo $RC['img']; ?>)">
				<div class="degradeAddRecente">
					<div class="generoAddRecente"><span><?php echo $RC['local']; ?></span></div>
					<div class="titleAddRecente"><?php echo $RC['title']; ?></div>
					<a href="noticias.php?noticia=<?php echo $RC['link']; ?>">
						<div class="vermais">VER MAIS</div>
					</a>
				</div>
			</div>
			<div class="col s4" style="margin-top: 10px;">
		<?php
		$ADD++;
		}elseif($ADD == 5){
			$ADD++;
		}elseif($ADD == 6){
			?> </div> <?php
		}else{
			?>
			<div class="col s10 NoticiaAddRecente">
				<div class="IMGAddRecente" style="background-image: url(<?php echo $RC['img']; ?>);"></div>
				<div class="titleAdd"><?php echo $RC['title']; ?></div>
				<div class="bottomAdd">
					<div class="generoAddRecente"><span><?php echo $RC['local']; ?></span></div>
					<a href="noticias.php?noticia=<?php echo $RC['link']; ?>">
						<div class="vermais">VER MAIS</div>
					</a>
				</div>
			</div>
			<?php
			$ADD++;
		}
?>
<?php
	endforeach;
?>
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
