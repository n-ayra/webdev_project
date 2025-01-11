<?php 

$db = new mysqli;

$db->connect('localhost','root','','flameandfork');

if(isset($_POST['send'])){
$cartName = $_POST['name'];
$cartPrice = $_POST['price'];
$cartQuantity = $_POST['quantity'];
$tableNum = $_POST['table'];
    
$num1  = doubleval($_POST['price']);
$num2  = intval($_POST['quantity']);
    
$newPrice = $num1*$num2;

$sql = "INSERT INTO ".$tableNum."
VALUES ('', '$cartName', '$cartQuantity', '$newPrice')";    

$db->query($sql);    

header('location:../pages/menuCust.php');    

/*if($val){
echo "<h2 >Successfully added into tasks lists</h2></p>";*/    
//}    
    
}

?>