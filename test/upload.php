<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require("../html/htmlStart.php"); ?>
	<form enctype="multipart/form-data" action="csv.php" method="POST">
	<br>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
	<label for="arquivo" class="form-control-label">Enviar esse arquivo: </label><input id="arquivo" name="arquivo" type="file" /><br>
	<label for="compet" class="form-control-label">Competência: </label>
	<input id="compet" name="compet" type="text" /><br/><br>
    <input type="submit" value="Enviar arquivo" class="btn btn-primary"/>
</form>
<?php require("../html/htmlEnd.php"); ?>