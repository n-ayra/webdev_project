<!DOCTYPE HTML>
<html>
<body>
<?php
    include "connection.php";
    session_start();
    
    if(isset($_POST['Login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from USER where USERNAME='".$username."' and PASSWORD='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $records = mysqli_query($conn, "SELECT * FROM user WHERE USERNAME ='$username'");
    
            while($data = mysqli_fetch_array($records))
            {
                $role = $data['ROLE'];
            }

            if ($role == 'Cashier')
            {
                $_SESSION['username'] = $username;
                header('Location: homepageCashier.php');
            } else if($role == 'Chef') {
                $_SESSION['username'] = $username;
                header('Location: homepageChef.php');
            }else {
                $_SESSION['message']="No role found";
            }
            
        }else{ 
            $_SESSION['message']="Invalid username and password";
			header('location:login.php');
        }

    }
}
?>
</body>
</html>