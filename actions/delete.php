<?php
//include "db.php";
session_start();
$db = new mysqli;
$db->connect('localhost','root','','flameandfork');

$cartName=$_GET['Name'];
//echo $id;

$sql="DELETE FROM ".$_SESSION['table']." WHERE NAME = '$cartName'";

$val= $db->query($sql);
if($val){
header('location:../pages/cart.php');

};

?>