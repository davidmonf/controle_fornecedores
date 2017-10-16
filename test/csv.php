<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
require_once("../html/htmlStart.php");

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	echo ("<script>alert('Arquivo válido e enviado com sucesso.');</script>");
} else {
	echo "Possível ataque de upload de arquivo!\n";
}
echo '<pre>';
$row = 1;
echo ("<table border='1'>");
if (($handle = fopen($uploadfile, "r")) !== FALSE) {
	while (($data = fgetcsv($handle, 50000, ";")) !== FALSE) {
		$query = '';
		$num = count($data);
		$row++;
		echo ("<tr>");
		for ($c=0; $c < $num; $c++) {
			if /*((($row > 5) && ($row < 8)) || */($row > 8)/*)*/ {
				if (($data[$c] == '') && ($data[$c+2]== '')){
					break;
				}
				else {
					$data[$c] = rtrim ($data[$c], "'");
					$data[$c] = trim ($data[$c], "'");
					echo ("<td>".$data[$c]."</td>");
					$query = ($query.",".$data[$c]);
				}
			}
		}
		echo ("</tr>");
		$query = trim($query, ",");
		if ($query != ('') || ('Série' != mb_substr($query, 0, 5))) {
			/*echo '<script>alert'*/
		$query_final = '
}INSERT INTO faturamento_simpress';
		/*echo("<script>alert('" . $query . "');</script>");*/
		echo $query.'<br/>';
		}
	}
	
	echo ("</table>");
	fclose($handle);
}
echo '</pre>';
require("../html/htmlEnd.php"); ?>