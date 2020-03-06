<?php

class noticias {

	private $pdo;

	public function __construct(){
		$this->pdo = new PDO("mysql:dbname=heroBlog;host=localhost", "root", "");
	}
	


	public function addNoticiaC($title, $autor, $noticia, $noticiaR, $local='',$img=''){

		$explo = explode(' ', $title);
		$implo = implode('-', $explo);
		$date = date('Y-m-d H:i:s');
		$dataform = date('Y/m/d/H/i/s', strtotime($date));
		$link = $dataform."/".$implo;

		$sql = "INSERT INTO noticia (local, title, autor, data, img, noticiaR, noticiaC, link) VALUES (:local, :title, :autor, :data, :img, :noticiaR, :noticiaC, :link)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":local", $local);
		$sql->bindValue(":title" ,$title);
		$sql->bindValue(":autor", $autor);
		$sql->bindValue(":data", $date);
		$sql->bindValue(":img", $img);
		$sql->bindValue(":noticiaR", $noticiaR);
		$sql->bindValue(":noticiaC", $noticia);
		$sql->bindValue(":link", $link);
		$sql->execute();

	}

	public function getNoticiaCompleta($link){

		$sql = "SELECT * FROM noticia WHERE link = :link";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":link", $link);
		$sql->execute();

		if($sql->rowCount() > 0){
			$noti = $sql->fetch();

			return $noti;
		} else{
			echo "<h1>erro: nao há noticia</h1>";
		}

	}
	public function getNoticias(){
		$sql = "SELECT * FROM noticia ORDER BY data DESC";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}
	}
	public function addView($link){
		$view = 1;
		$sql = "UPDATE noticia SET view = view + :view WHERE link = :link";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":view", $view);
		$sql->bindValue(":link", $link);
		$sql->execute();
	}


}