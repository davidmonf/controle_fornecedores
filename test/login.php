<?php
require 'conexao.php';

$usuario = $pwd = "";
$usuario_err = $pwd_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Teste se campo usuário está vazio
	if(trim($_POST["usuario"]) == false){
		$usuario_err = 'Digite um usuário.';
		echo $usuario_err;
	} else{
		$usuario = trim($_POST["usuario"]);
	}
	//Teste se campo senha está vazio
	if(trim($_POST["pwd"]) == false){
		$pwd_err = 'Digite uma senha.';
		echo $pwd_err;
	} else{
		$pwd = trim($_POST["pwd"]);
	}
	
	if($usuario_err == "" && $pwd_err == ""){
		$sql = "SELECT ";
		
		if($stmt = mysqli_prepare($conecta_banco, $sql) or die(mysqli_error($conecta_banco))){
			mysqli_stmt_bind_param($stmt, "s", $param_usuario);
			
			$param_usuario = $usuario;
			
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					
					mysqli_stmt_bind_result($stmt, $usuario, $hashed_password);
					
					if(mysqli_stmt_fetch($stmt)){
						if(password_verify($pwd, $hashed_password)){
							session_start();
							$_SESSION['username'] = $usuario;
							header("location: input_simpress.php");
						} else{
							$pwd_err = 'Senha incorreta.';
						}
					}
				} else{
					$usuario_err = 'Usuário não encontrado';
				}
			} else{
				echo "Falha na conexão.";
			}
		}
		
		mysqli_stmt_close($stmt);
		
	}
	
	mysqli_close($conecta_banco);
	
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<!--HEAD-->
<?php require_once("../html/head.php"); ?>
<!--/HEAD-->

<body>
	<h3 id="titulologin">Controle de Fornecedores</h3>
	
	<div class="imgcontainer">
		<img src="../src/images/presentation.png" alt="Controle de Fornecedores" class="logo">
	</div>
	<form method="post">
	<div id="loginform" class="row">
		<div class="col-md-4 col-md-offset-4">
		<label for="login"
		       class="form-control-label">Usuário: </label>
		<input type="text"
		       class="form-control"
		       id="login"
		       name="usuario"><br>
		<label for="pwd"
		       class="form-control-label">Senha: </label>
		<input type="password"
		       class="form-control"
		       id="pwd"
		       name="pwd"><br>
		</div>
		<div class="col-md-12">
			<button id="entrar" type="submit" class="btn btn-primary">Entrar</button>
			<br>
	</div>
	<br>
</div>
</form>
</body>
</html>


