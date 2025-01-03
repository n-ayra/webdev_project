<?php 
$db = new mysqli;

$db->connect('localhost','root','','muowestern');

if(isset($_POST['sent'])){
    
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['suggestion'];

$sql = "INSERT INTO CONTACT (NAME, EMAIL, SUGGESTION)
VALUES ('$name', '$email', '$comment')";    

$val=$db->query($sql);

header('location: Final.php');       
    
}

?>