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


if(isset($_POST['title']) && !empty($_POST['title'])){
	$title = addslashes($_POST['title']);
	$autor = addslashes($_POST['autor']);
	$noticia = addslashes($_POST['noticia']);
	$noticiaR = addslashes($_POST['noticiaR']);
	$local = addslashes($_POST['local']);
	$img = addslashes($_POST['img']);

	$HN->addNoticiaC($title, $autor, $noticia, $noticiaR, $local, $img);

}
?>

<form method="POST">
	Titulo<br/>
	<input type="text" name="title"><br/>
	Autor<br/>
	<input type="text" name="autor"><br/>
	noticia<br/>
	<textarea name="noticia"></textarea><br/>
	resumo<br/>
	<textarea name="noticiaR"></textarea>
	Local<br/>
	<input type="text" name="local"><br/>
	URL da imagem<br/>
	<input type="text" name="img"><br/><br/>
	<input type="submit" value="POSTAR" class="btn">


</form>




<?php
require 'templates/foot.php';
?>
