<?php
/**
 * Created by PhpStorm.
 * User: 79240SP
 * Date: 03/10/2017
 * Time: 18:13
 */

session_start();

$_SESSION = array();

session_destroy();

header("location: login.php");
exit;

?>