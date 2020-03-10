<?php

class noticias {

	private $pdo;

	public function __construct(){
		$this->pdo = new PDO("mysql:dbname=heroBlog;host=localhost", "root", "");
	}

	public function addNoticiaC($title, $autor, $noticia, $noticiaR, $gen, $img=''){

		$genero = $this->getGen($gen);

		$explo = explode(' ', $title);
		$implo = implode('-', $explo);
		$date = date('Y-m-d H:i:s');
		$dataform = date('Y/m/d/H/i/s', strtotime($date));
		$link = $dataform."/".$implo;
		$view = 0;

		$sql = "INSERT INTO noticia (local, gen, title, autor, data, img, noticiaR, noticiaC, link, view) VALUES (:local, :gen, :title, :autor, :data, :img, :noticiaR, :noticiaC, :link, :view)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":local", $genero['nomeCt']);
		$sql->bindValue(":gen", $gen);
		$sql->bindValue(":title" ,$title);
		$sql->bindValue(":autor", $autor);
		$sql->bindValue(":data", $date);
		$sql->bindValue(":img", $img);
		$sql->bindValue(":noticiaR", $noticiaR);
		$sql->bindValue(":noticiaC", $noticia);
		$sql->bindValue(":link", $link);
		$sql->bindValue(":view", $view);
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
	public function getNoticiaView(){
		$sql = "SELECT * FROM noticia ORDER BY view DESC";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}
	}
	public function getGenero(){
		$sql = "SELECT * FROM categoria";
		$sql = $this->pdo->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}
	}

	private function getGen($gen){
		$sql = "SELECT nomeCt FROM categoria WHERE id = :id";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":id", $gen);
		$sql->execute();

		if($sql->rowCount() > 0){
			$gen = $sql->fetch();

			return $gen;
		}
	}


}