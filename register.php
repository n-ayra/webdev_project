<?php
include "connection.php";


$id = $name = $username = $password = $role = "";
// define variables and set to empty values
$idErr = $nameErr = $usernameErr = $passErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty(trim($_POST["id"]))) {
    $idErr = "Id is required";
  } else {
    $id = trim($_POST["id"]);
  }
    
  if (empty(trim($_POST["name"]))) {  
         $nameErr = "Name is required";  
    } else {  
        $name = trim($_POST["name"]); 
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",trim($_POST["name"]))) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  

    if (empty(trim($_POST["username"]))) {  
        $usernameErr = "Username is required";  
   } else {  
        $username = trim($_POST["username"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",trim($_POST["username"]))) {  
               $usernameErr = "Only alphabets and white space are allowed";  
           }  
   }  

    
   if(empty(trim($_POST["password"]))){
    $passErr = "Please enter a password.";     
} elseif(strlen(trim($_POST["password"])) < 6){
    $passErr = "Password must have atleast 6 characters.";
} else{
    $password = trim($_POST["password"]);
}

$role = trim($_POST["role"]);

if(empty($idErr) && empty($nameErr) && empty($usernameErr) && empty($passErr)){
        
    // Prepare an insert statement
    $sql = "INSERT INTO user VALUES (?, ?, ?, ?, ?)";
     
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, 'sssss', $param_id, $param_name, $param_username, $param_password, $param_role);
        
        // Set parameters
        $param_id = $id;
        $param_name = $name;
        $param_username = $username;
        $param_password = $password; // Creates a password hash
        $param_role = $role;
    
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
                 // Redirect to login page
            header("location: login.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}

// Close connection
mysqli_close($conn);
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<style>
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('Image/muar.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 450px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.register_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.register_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
} 
</style>    
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                            </div>
                            <input type="text" name="id" class="form-control <?php echo (!empty($idErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>" placeholder="id" required>
                            <span class="error" style="color: white;">* <?php echo $idErr; ?> </span>  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-amilia"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control <?php echo (!empty($nameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>" placeholder="name" required>
                            <span class="error" style="color: white;">* <?php echo $nameErr; ?> </span>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="username" required>
                            <span class="error" style="color: white;">* <?php echo $usernameErr; ?> </span>
                        </div>
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control <?php echo (!empty($passErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" placeholder="password" required>
                            <span class="error" style="color: white;">* <?php echo $passErr; ?> </span>
                        </div>
                        
                            
                            <input type="radio" name="role" value="Cashier" required>
                            <label for="Cashier" style="color:White;">Cashier</label><br>
                            <input type="radio" name="role" value="Chef" required>
                            <label for="Chef" style="color:White;">Chef</label><br>
                       
                        <div class="form-group">
                        <input type="submit" name="submit" class="btn float-right register_btn">
                        </div>
                    </form>
                    <p style="color:White;">Already have an account? <a href="login.php">Login here</a>.</p>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
