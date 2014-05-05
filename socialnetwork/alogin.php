<?php
require('db_connect.php');
require_once('logincheck.php');
require_once('sesstart.php');

$user = $_POST['luname'];
$password = $_POST['lpass'];
logincheck($user,$password,$dibconn);
?>