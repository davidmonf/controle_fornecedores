<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>
<?php require("../html/htmlStart.php"); ?>

<a href="rateio.php">Rateio</a> <br/>
<a>Relatório de gasto por centro de custo</a> <br/>
	<a>Relatório de gasto por gerência</a> <br/>
	<a>Relatório de gasto por superintendência</a> <br/>





<?php require("../html/htmlEnd.php"); ?>