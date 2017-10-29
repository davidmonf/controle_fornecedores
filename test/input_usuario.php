<?php
$host="localhost";
$username="root";
$password="netuno1989";
$db_name="fornecedores";
$conecta_banco = mysqli_connect("$host", "$username", "$password", $db_name)or die("Não posso conectar");

$usuario = "";
$email = "";
$erro = "";
$error = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$usuario = trim($_POST['usuario']);
	$email = trim($_POST['usuario_email']);
	$pwd = trim($_POST['pwd']);
	$confirma_pwd = trim($_POST['confirma_pwd']);
	
	if(empty($usuario)){
		
		$erro = "Digite um usuário.";
		$error = true;
		//echo $erro;
	} else if(strlen($usuario) < 5){
	
		$erro = "Usuario deve ter pelo menos 5 caracteres.";
		$error = true;
		//echo $erro;
	}
	
	if(empty($pwd)){
		
		$erro = "Digite uma senha.";
		$error = true;
	} else if(strlen($pwd) < 6){
		
		$erro = "Senha deve ter pelo menos 6 caracteres.";
		$error = true;
	}
	
	if(empty($confirma_pwd)){
		
		$erro = "Confirme a senha.";
		$error = true;
	} else if($confirma_pwd != $pwd){
		
		$erro = "Senhas digitadas não conferem.";
		$error = true;
	}
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$erro = "Digite um endereço de email válido.";
		$error = true;
	}
	
	//$pwd = hash('sha256', $pwd);

	if(!$error){
		
		$sql = "INSERT INTO usuarios(ID, usuario, pwd, email) VALUES (NULL, '$usuario','$pwd','$email')";
		$stmt = mysqli_prepare($conecta_banco, $sql) or die(mysqli_error($conecta_banco));
		$res = mysql_query($sql);
		
		if(mysqli_stmt_execute($stmt)) {
			echo "Sucesso";
		} else {
			echo  "Falha!";
		}
	}
	
	
}
?>

<?php require("../html/head.php"); ?>

<body>
<h3 id="titulologin">Cadastro de Usuário</h3>
<div class="imgcontainer">
	<img src="../src/images/user128.png" alt="Controle de Fornecedores" class="logo">
</div>
<form method="post" action="input_usuario.php">
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
			<a href="dashboard_simpress.php">Voltar</a>
			<br>
			<label id="erro" style="color:red"><?php echo $erro ?></label>
			<br>
		</div>
		<br>
	</div>
</form>
</body>

<?php require("../html/htmlEnd.php"); ?>