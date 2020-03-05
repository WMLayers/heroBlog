<?php
class Users {
	private $pdo;

	public function __construct(){
		$this->pdo = new PDO("myslq:dbname=heroBlog;host=localhost", "root", "");
	}


	public function Login($email, $senha){
		$sql = "SELECT * FROM user WHERE email = :email AND senha = :senha";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		if($sql->rowCount() > 0){
			$usuario = $sql->fetch();

			return $usuario;
		}
	}

}