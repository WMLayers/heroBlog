<?php
$title = "LOGIN";
require 'templates/head.php';
require 'classes/tempo.class.php';
?>
<div class="menuL">
	<div class="loginL">
		<div class="logoEL">
			<img src="wpast/images/logoEscrito.png">
		</div>
		<div class="arealoginL">
			<a href="#" class="assL">ASSINE</a>
			<a href="#" class="LL">LOGIN</a>
		</div>
	</div>
	<div class="logoL">
		<div class="logoimgl">
			<img src="wpast/images/logoTop.png" height="50">
		</div>
		<div class="tempL">
			<div class="tmL">
				<img src="wpast/images/climate/<?php echo $imgClimate; ?>" height="<?php echo $tam; ?>">
			</div>
			<div class="numL">
				<div class="cL"><?php echo $tempo; ?></div>
				<div class="atualL">noite</div>
			</div>
		</div>
	</div>
	<div class="searshL">
		<div class="s1L">
			
		</div>
		<div class="redeSL">
			<div>acompanhe:</div>
			<a href="#"><img src="wpast/images/face.png" height="18"></a>
			<a href="#"><img src="wpast/images/insta.png" height="18"></a>
		</div>
	</div>
</div>

<?php
require 'templates/foot.php';
?>