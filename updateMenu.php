<?php 

$db = new mysqli;

$db->connect('localhost','root','','muowestern');

if(isset($_POST['send'])){
$menuID = $_POST['id'];
$menuName = $_POST['name'];
$menuDesc = $_POST['desc'];
$menuPrice = $_POST['price'];

$sql = "UPDATE menu set NAME='$menuName', DESC_MENU='$menuDesc', PRICE='$menuPrice' WHERE ID='$menuID'";

$db->query($sql);    

header('location:menu.php');    

/*if($val){
echo "<h2 >Successfully added into tasks lists</h2></p>";*/    
//}    
    
}

?>