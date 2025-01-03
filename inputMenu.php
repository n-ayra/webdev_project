<?php 

$db = new mysqli;

$db->connect('localhost','root','','muowestern');

if(isset($_POST['send'])){
$menuName = $_POST['name'];
$menuPrice = $_POST['price'];
$menuDesc = $_POST['desc'];
$menuImage = $_POST['image'];


$sql = "INSERT INTO menu
VALUES ('', '$menuName', '$menuDesc', '$menuPrice', '$menuImage')";    

$db->query($sql);    

header('location:menu.php');    

/*if($val){
echo "<h2 >Successfully added into tasks lists</h2></p>";*/    
//}    
    
}

?>