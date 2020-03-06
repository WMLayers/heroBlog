<?php
//require 'classes/noticias.class.php';

//$not = new noticias();



//$data = date('Y-m-d H:i:s');
//$dataform = date('Y/m/d/H/i/s', strtotime($data));
//$title = "ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
//tempor incididunt ut labore et dolore magna aliqua.";
//$explo = explode(' ', $title);
//$implo = implode('-', $explo);

//$link = $dataform."/".$implo;

//$am = explode('-', $link);

//echo end($am);



//echo $title."<br/>";
//echo $implo."<br/>";
//echo $hash."<br/><br/>";
//echo $dataform."<br/><br/>";
//echo $link."<br/><br/>";
?>

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


<div class="container">
	
	<?php
	$nots = $HN->getNoticias();
	$numeroItem = 0;
	$numeroContainer = 0;
	foreach($nots as $Ni):?>

		<a href="noticias.php?noticia=<?php echo $Ni['link']; ?>">
			<?php
			if($numeroContainer <= 5){
				if($numeroItem == 1){
						?>
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
									<div class="autorIndexN">
										<div style="display:flex; align-items: center;"><i class='tiny material-icons'>visibility</i><?php echo $Ni['view']; ?></div>
										<?php echo "Por ".strtoupper($Ni['autor']);?>
									</div>
								</div>	
							</div>
						<?php
				}else{
					?>
						<div class="bannerTop" style="background-image: url(<?php echo $Ni['img']; ?>); background-repeat: no-repeat; background-size: cover;">
							<div class="titleBanner"><?php echo $Ni['title']; ?></div>
						</div>
					<?php
					$numeroItem++;
					
				}
				$numeroContainer++;
			}else{
				
			}
			?>
		</a><br/><br/>

	<?php endforeach; ?>
	<h2>MAIS CLICADO</h2>
	<?php 
		$viewM = $HN->getNoticiaView();
		$clicados = 0;
		foreach($viewM as $Vi): 
	?>
	<a href="noticias.php?noticia=<?php echo $Vi['link']; ?>">

		<?php 
		if($clicados <= 5){
		?>
			<div class="IndJ">
				<?php 
					if($Vi['img'] == ''){
						echo "";
					}else{
				?>
				<div class="bannerimg">
				<img src="<?php echo $Vi['img']; ?>" class="imgIndexBanner" height="200">
					<div class="classIndex">[<?php echo strtoupper($Vi['local']); ?>]</div>
				</div>
				<?php
					} 
				?>
				<div class="noticiaIndex">
					<div class="titleIndexN"><?php echo $Vi['title']; ?></div>
					<div class="resumoIndexN"><?php echo $Vi['noticiaR']; ?></div>
					<div class="autorIndexN">
						<div style="display:flex; align-items: center;"><i class='tiny material-icons'>visibility</i><?php echo $Vi['view']; ?></div>
						<?php echo "Por ".strtoupper($Vi['autor']);?>
					</div>
				</div>	
			</div>
		<?php
		$clicados++;	
		}else{

		}				
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
