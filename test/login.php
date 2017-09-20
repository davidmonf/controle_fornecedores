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
	</div>
</div>
</body>
</html>

