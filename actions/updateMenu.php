<?php 

$db = new mysqli;

$db->connect('localhost','root','','flameandfork');


if(isset($_POST['send'])){
$menuID = $_POST['id'];
$menuName = $_POST['name'];
$menuDesc = $_POST['desc'];
$menuPrice = $_POST['price'];

$sql = "UPDATE menu set NAME='$menuName', DESC_MENU='$menuDesc', PRICE='$menuPrice' WHERE ID='$menuID'";

$db->query($sql);    

header('location:../pages/menu.php');    
  
    
}

?>