<?php

require_once "Conexao.php";

class Comentario{

	private $email;
	private $conteudo;

	public function setConteudo($conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function __construct($conteudo, $email){
		$this->setEmail($email);
		$this->setConteudo($conteudo);
	}

	public function inserir(){
		$objConexao = new Conexao();
		$conexao = $objConexao->conectar();
		$stmt = $conexao->prepare("INSERT INTO comentario VALUES (NULL,?,?, now())");
		$stmt->bindParam(1,$this->conteudo);
		$stmt->bindParam(2,$this->email);
		$stmt->execute();
	}

	/*public function consultarTodosComentarios(){
		$objConexao = new Conexao();
		$conexao = $objConexao->conectar();
		$stmt = $conexao->prepare("SELECT * FROM usuario");
		$stmt->execute();

		$resultado = $stmt->fetchAll();

		foreach($resultado AS $valor){
			echo $valor["nome"] . " - " . $valor["idade"]. "<br />";
		}
	}*/

}