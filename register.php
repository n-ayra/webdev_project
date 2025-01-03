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
    if (!preg_match("/^[a-zA-Z ]*$/", trim($_POST["name"]))) {
      $nameErr = "Only alphabets and white space are allowed";
    }
  }

  if (empty(trim($_POST["username"]))) {
    $usernameErr = "Username is required";
  } else {
    $username = trim($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", trim($_POST["username"]))) {
      $usernameErr = "Only alphabets and white space are allowed";
    }
  }

  if (empty(trim($_POST["password"]))) {
    $passErr = "Please enter a password.";
  } elseif (strlen(trim($_POST["password"])) < 6) {
    $passErr = "Password must have at least 6 characters.";
  } else {
    $password = trim($_POST["password"]);
  }
  $role = trim($_POST["role"]);
  if (empty($idErr) && empty($nameErr) && empty($usernameErr) && empty($passErr)) {

    // Prepare an insert statement
    $sql = "INSERT INTO user VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, 'sssss', $param_id, $param_name, $param_username, $param_password, $param_role);

      // Set parameters
      $param_id = $id;
      $param_name = $name;
      $param_username = $username;
      $param_password = $password; // Creates a password hash
      $param_role = $role;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: login.php");
      } else {
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to bottom, #ff6f61, #de3c3c);
      font-family: 'Roboto', sans-serif;
      overflow: hidden;
    }

    .background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('Image/muar.jpg');
      background-size: cover;
      background-position: center;
      filter: blur(8px);
      z-index: -1;
    }

    .register-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .form-control {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: #fff;
    }

    .form-control::placeholder {
      color: #ddd;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.3);
      color: #fff;
      box-shadow: none;
    }

    .btn-register {
      background: #b22222;
      color: #fff;
      border-radius: 50px;
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .btn-register:hover {
      background: #d62727;
      transform: translateY(-5px);
    }

    .links {
      color: #f08080;
    }

    .links a {
      color: #fff;
      text-decoration: underline;
    }

    .links a:hover {
      color: #f08080;
    }

    .custom-radio label {
      color: #fff;
      margin-right: 10px;
      font-weight: 500;
    }

    .custom-radio input[type="radio"]:checked + label::before {
      background-color: #ff6f61;
      border-color: #ff6f61;
    }

    .custom-radio input[type="radio"]:checked + label {
      color: #ff6f61;
    }

    .custom-radio input[type="radio"] {
      visibility: hidden;
    }

    .custom-radio input[type="radio"] + label::before {
      content: '';
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 2px solid #fff;
      border-radius: 50%;
      margin-right: 10px;
      background-color: transparent;
      transition: all 0.3s ease;
    }

  </style>
</head>
<body>

  <div class="background"></div>

  <div class="container d-flex justify-content-center align-items-center">
    <div class="register-card p-4 rounded shadow-lg text-center w-100" style="max-width: 400px;">
      <h3 class="mb-4">Register</h3>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
        <div class="form-group">
          <input type="text" name="id" class="form-control <?php echo (!empty($idErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>" placeholder="ID" required>
        </div>
        <div class="form-group">
          <input type="text" name="name" class="form-control <?php echo (!empty($nameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>" placeholder="Name" required>
        </div>
        <div class="form-group">
          <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control <?php echo (!empty($passErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" placeholder="Password" required>
        </div>
        <div class="form-group custom-radio">
          <input type="radio" name="role" value="Cashier" id="cashier" required>
          <label for="cashier">Cashier</label>
          <input type="radio" name="role" value="Chef" id="chef" required>
          <label for="chef">Chef</label>
        </div>
        <button type="submit" name="submit" class="btn btn-register btn-block">Register</button>
      </form>
      <div class="links mt-3">
        Already have an account? <a href="login.php">Login here</a>.
      </div>
    </div>
  </div>

  <script>
    function validateForm() {
      const id = document.forms[0]["id"].value;
      const name = document.forms[0]["name"].value;
      const username = document.forms[0]["username"].value;
      const password = document.forms[0]["password"].value;
      if (id === "" || name === "" || username === "" || password === "") {
        alert("Please fill in all fields.");
        return false;
      }
      return true;
    }
  </script>

</body>
</html>
