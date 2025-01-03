<?php
//include "db.php";
session_start();
$db = new mysqli;
$db->connect('localhost','root','','muowestern');

$cartName=$_GET['Name'];
//echo $id;

$sql="DELETE FROM ".$_SESSION['table']." WHERE NAME = '$cartName'";

$val= $db->query($sql);
if($val){
header('location:cart.php');

};

?>