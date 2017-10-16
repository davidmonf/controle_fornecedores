<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require_once("../html/htmlStart.php"); ?>
<form enctype="multipart/form-data" action="csv.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>
<?php require("../html/htmlEnd.php"); ?>