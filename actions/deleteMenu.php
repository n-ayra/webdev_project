<?php
//include "db.php";
session_start();
$db = new mysqli;
$db->connect('localhost','root','','flameandfork');

$menuId=$_GET['NAME'];
//echo $id;

$sql="DELETE FROM menu WHERE ID = '$menuId'";

$val= $db->query($sql);
if($val){
header('location:../pages/menu.php');

};

?>