<?php
session_start();
require_once "../database/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

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
            background-image: url('../images/flameandfork.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }

        .login-card {
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
            color: #aaa; /* Slightly darker for better readability */
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            box-shadow: none;
        }

        .btn-login,
        .btn-customer {
            background: #b22222;
            color: #fff;
            border-radius: 50px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-login:hover,
        .btn-customer:hover {
            background: #d62727;
            transform: translateY(-5px);
        }

        .links a {
            color: #fff;
            text-decoration: underline;
        }

        .links a:hover {
            color: #f08080;
        }
    </style>
</head>

<body>
    <div class="background"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-card p-4 rounded shadow-lg text-center w-100" style="max-width: 400px;">
            <h3 class="mb-4">Login</h3>

            <!-- Display session message -->
            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['message']; ?>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <form action="../actions/auth.php" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" name="Login" class="btn btn-login btn-block">Login</button>
            </form>
            <div class="links mt-3">
                Don't have an account? <a href="../pages/register.php">Register now</a>.
            </div>
            <a href="../pages/homepageCust.php" class="btn btn-customer btn-block mt-4">Continue As CUSTOMER</a>
        </div>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();
            if (username === "" || password === "") {
                alert("Please fill in all fields.");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
