<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
include("conexao.php")
?>

<?php require_once("../html/htmlStart.php"); ?>

<?php

if ($_POST['busca_serial'] != NULL) {$serial = $_POST['busca_serial']; $query .= "SERIE = ".$serial." AND ";}
if ($_POST['busca_cidade'] != NULL) {$cidade = $_POST['busca_cidade']; $query .= "CIDADE = ".$cidade." AND ";}
if ($_POST['busca_uf'] != NULL) {$uf = $_POST['busca_uf']; $query .= "UF = ".$uf." AND ";}
if ($_POST['busca_cr'] != NULL) {$cr = $_POST['busca_cr']; $query .= "CR = ".$cr." AND ";}
if ($_POST['busca_item'] != NULL) {$item = $_POST['busca_item']; $query .= "ITEM_CONTRATO = ".$item." AND ";}
if ($_POST['busca_desccr'] != NULL) {$desc_cr = $_POST['busca_desccr']; $query .= "DESCRICAO_CR = ".$desc_cr." AND ";}
if ($_POST['busca_gerencia'] != NULL) {$gerencia = $_POST['busca_gerencia']; $query .= "GERENCIA = ".$gerencia." AND ";}
if ($_POST['busca_superint'] != NULL) {$superint = $_POST['busca_superint']; $query .= "SUPERINT = ".$superint;}

echo ($query);


$sql = "SELECT SERIE, CIDADE, UF, CR, ITEM_CONTRATO, DESCRICAO_CR, GERENCIA, SUPERINT FROM impressoras WHERE $query";

if (mysqli_num_rows($sql) == 1) {

}

?>
<?php require("../html/htmlEnd.php"); ?>
