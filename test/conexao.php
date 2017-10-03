<?php
/**
 * Created by PhpStorm.
 * User: david_filho
 * Date: 02/10/2017
 * Time: 18:49
 */
$host="localhost";
$username="root";
$password="netuno1989";
$db_name="fornecedores";
$conecta_banco = mysql_connect("$host", "$username", "$password")or die("Não posso conectar");
mysql_select_db("$db_name")or print(mysql_error());
?>