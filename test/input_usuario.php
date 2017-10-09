<?php
$host="localhost";
$username="root";
$password="netuno1989";
$db_name="fornecedores";
$conecta_banco = mysqli_connect("$host", "$username", "$password", $db_name)or die("Não posso conectar");

$usuario = "";
$email = "";
$erro = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$usuario = trim($_POST['usuario']);
	$email = trim($_POST['usuario_email']);
	$pwd = trim($_POST['pwd']);
	$confirma_pwd = trim($_POST['confirma_pwd']);
	
	if(empty($usuario)){
		
		$erro = "Digite um usuário.";
		//echo $erro;
	} else if(strlen($usuario) < 5){
	
		$erro = "Usuario deve ter pelo menos 5 caracteres.";
		//echo $erro;
	}
	
	if(empty($pwd)){
		
		$erro = "Digite uma senha.";
	} else if(strlen($pwd) < 6){
		
		$erro = "Senha deve ter pelo menos 6 caracteres.";
	}
	
	if(empty($confirma_pwd)){
		
		$erro = "Confirme a senha.";
	} else if($confirma_pwd != $pwd){
		
		$erro = "Senhas digitadas não conferem.";
	}
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$erro = "Digite um endereço de email válido.";
	}
	
	$pwd = hash('sha256', $pwd);

}
?>

<?php require_once("../html/head.php"); ?>

<body>
<h3 id="titulologin">Controle de Usuário</h3>
<div class="imgcontainer">
	<img src="../src/images/user128.png" alt="Controle de Fornecedores" class="logo">
</div>
<form method="post">
	<div id="loginform" class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
				<div class="col-md-12">
					<label for="login"
				       class="form-control-label">Usuário: </label>
					<input type="text"
				       class="form-control"
				       id="usuario"
				       name="usuario"><br>
				</div>
				<div class="col-md-6">
					<label for="pwd"
				       class="form-control-label">Senha: </label>
					<input type="password"
				       class="form-control"
				       id="pwd"
				       name="pwd"><br>
				</div>
				<div class="col-md-6">
					<label for="pwd"
				       class="form-control-label">Confirme a senha: </label>
					<input type="password"
				       class="form-control"
				       id="confirma_pwd"
				       name="confirma_pwd"><br>
				</div>
				<div class="col-md-12">
					<label for="email"
					       class="form-control-label">Email: </label>
					<input type="text"
					       class="form-control"
					       id="email"
					       name="usuario_email"><br>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<button id="cadastrar_usuario" type="submit" class="btn btn-primary">Cadastrar</button>
			<br>
			<br>
			<label id="erro" style="color:red"><?php echo $erro ?></label>
			<br>
		</div>
		<br>
	</div>
</form>
</body>

<?php require_once("../html/htmlEnd.php"); ?>