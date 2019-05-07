<?php

require_once "Conexao.php";

class Usuario{

	private $idUsuario;
	private $email;
	private $senha;
	

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function __construct($email, $senha){
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function login(){
	$objConexao = new Conexao();
	$conexao = $objConexao->conectar();
	$stmt = $conexao->prepare("SELECT * FROM usuario where email=? and senha=?");
	$stmt->bindParam(1,$this->email);
	$stmt->bindParam(2,$this->senha);
	$stmt->execute();

	$resultado = $stmt->fetchAll();
	//echo var_dump($resultado);
	if(count($resultado)>0){
		foreach($resultado AS $chave){
			$this->setIdUsuario($chave["idUsuario"]);
		}
		
		echo "<script> 
		alert('Login efetuado com sucesso!');
		window.location.href='admin.php';
		</script>
		";
		
	}else{
		echo "<script> 
			alert('Login ou senha incorretos...');
			window.location.href='login.php';
			</script>
		";

	}
	$_SESSION["idUsuario"]=$this->getIdUsuario();
	$_SESSION["email"]=$this->getEmail();
	$_SESSION["senha"]=$this->getSenha();
	}
	public function adicionarAdmin($emailN, $senhaN, $senhaUser){
		if($_SESSION["senha"] = $senhaUser){
			$objConexao = new Conexao();
			$conexao = $objConexao->conectar();
			$stmt = $conexao->prepare("insert into usuario (email, senha) values (?, ?)");
			$stmt->bindParam(1,$emailN);
			$stmt->bindParam(2,$senhaN);
			$stmt->execute();
			echo "<script>
				alert('Administrador cadastrado com sucesso!');
				window.location.href='admin.php';
			</script>";
			header("admin.php");
		}else{
			echo "<script>
				alert('Por favor insira sua senha corretamente');
				window.location.href='adicionarAdmin.php'
			</script>";
		}
	}
	public function consultarTodosComentarios(){
		$objConexao = new Conexao();
		$conexao = $objConexao->conectar();
		$stmt = $conexao->prepare("SELECT * FROM comentario");
		$stmt->execute();

		$resultado = $stmt->fetchAll();
		if(count($resultado)>0){
		echo "<script> 
				function confirmarExcluir(idComentario){
				var confirma = confirm('Você realmente deseja excluir?');
				if(confirma){
					window.location.href='excluirComentario?idComentario='+idComentario;
				}}</script>";
		echo "<table style='border:1px solid'> 
					<tr> 
						<th>Comentário</th> 
						<th>Email</th>
						<th>Data</th> 
						<th>Opções</th>
					</tr>";

		foreach($resultado AS $chave){
			echo "<tr>
						<td>".$chave["conteudo"]."</td>
						<td>".$chave["emailUsuario"]."</td>
						<td>".$chave["hora"]."</td>
						<td><a onclick=confirmarExcluir('".$chave["idComentario"]."')> Excluir </a></td>
				</tr>";
		}
		echo "</table>";
		}else{
			echo "<p class='style2'> Nenhum comentário encontrado </p>";
		}
	}
	

	public function mudarSenha($novaSenha){
		$objConexao = new Conexao();
		$conexao = $objConexao->conectar();
		$stmt = $conexao->prepare("UPDATE usuario SET senha=? WHERE idUsuario = ?");

		$stmt->bindParam(1,$novaSenha);
		$stmt->bindParam(2,$_SESSION["idUsuario"]);
		$stmt->execute();
		$_SESSION["senha"]=$novaSenha;
		echo "<script> 
		alert('Senha alterada com sucesso!');
		window.location.href='admin.php';
		</script>
		";
	}

	public function excluirComentario($idComentario){
		$objConexao = new Conexao();
		$conexao = $objConexao->conectar();
		$stmt = $conexao->prepare("DELETE FROM comentario WHERE idComentario=?");
		$stmt->bindParam(1,$idComentario);
		$stmt->execute();
		echo "<script> 
		alert('Comentário apagado com sucesso!');
		window.location.href='listarComentarios.php';
		</script>
		";
	}

}