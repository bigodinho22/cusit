<?php
	
class Conexao{

	private static $servidor  = "localhost";
	private static $nomeBanco = "cusit";
	private static $usuario   = "root";
	private static $senha 	  = "";

	public function conectar(){

		try{
			$conexao = new PDO("mysql:host=".self::$servidor.
							   ";dbname=".self::$nomeBanco.
							   ";charset=utf8", 
							   self::$usuario,
							   self::$senha);

			$conexao->setAttribute(PDO::ATTR_ERRMODE, 
								   PDO::ERRMODE_EXCEPTION);
			return $conexao;
			
		}catch(PDOException $e){
			echo "Erro: " . $e->getMessage();
		}
	}
}