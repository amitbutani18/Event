<?php
session_start();
$_SESSION['login']=$_GET[''];
echo $_SESSION['login'];
?>