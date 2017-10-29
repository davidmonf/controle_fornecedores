<?php

$sql = "SELECT COUNT(DISTINCT SERIE) FROM `impressoras` WHERE 1";
$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
while ($resultado = mysql_fetch_assoc($result)){
	echo($resultado['COUNT(DISTINCT SERIE)']);
}

?>