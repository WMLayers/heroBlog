<?php
$title = "Home";
$link1 = '<a href="#" class="assL">CADASTRE-SE</a>';
$link2 = '<a href="login.php" class="LL">LOGIN</a>';
$semMaterialize = 'true';	
require 'templates/head.php';
require 'classes/tempo.class.php';
//require 'templates/menuTop.php';

//require 'teste.php';

require 'classes/noticias.class.php';

$HN = new noticias();


if(isset($_POST['title']) && !empty($_POST['title'])){
	$title = addslashes($_POST['title']);
	$autor = addslashes($_POST['autor']);
	$noticia = $_POST['noticia'];
	$noticiaR = $_POST['noticiaR'];
	$local = addslashes($_POST['local']);
	$img = addslashes($_POST['img']);

	$HN->addNoticiaC($title, $autor, $noticia, $noticiaR, $local, $img);

}
?>
<div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
	<h1>ADCIONAR MATERIA</h1>
	<a href="index.php"> Ir para home </a>
	<form method="POST">
		<h3>Titulo</h3>
		<input type="text" name="title" style="height: 30px; width: 500px; padding: 10px;"><br/>
		Autor<br/>
		<input type="text" name="autor" style="height: 30px; width: 500px; padding: 10px;"><br/>
		noticia<br/>
		<textarea name="noticia" id="editor1" rows="10" cols="80">
		</textarea><br/>
		resumo<br/>
		<textarea name="noticiaR" id="editor2" rows="10" cols="80"></textarea><br/>
		Local<br/>
		<input type="text" name="local" style="height: 30px; width: 500px; padding: 10px;"><br/>
		URL da imagem<br/>
		<input type="text" name="img" style="height: 30px; width: 500px; padding: 10px;"><br/><br/>
		<input type="submit" value="POSTAR" class="btn">


	</form>
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