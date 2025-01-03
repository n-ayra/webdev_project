<?php
//include "db.php";
session_start();
$db = new mysqli;
$db->connect('localhost','root','','muowestern');

$menuId=$_GET['NAME'];
//echo $id;

$sql="DELETE FROM menu WHERE ID = '$menuId'";

$val= $db->query($sql);
if($val){
header('location:menu.php');

};

?>