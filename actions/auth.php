<!DOCTYPE HTML>
<html>
<body>
<?php
session_start();
require_once "../database/connection.php";

if (isset($_POST['Login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // Prepared statement to check user
        $stmt = $conn->prepare("SELECT ROLE, PASSWORD FROM user WHERE USERNAME = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['PASSWORD'];
            $role = $row['ROLE'];

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;

                // Redirect based on role
                if ($role === 'Cashier') {
                    header('Location: ../pages/homepageCashier.php');
                } elseif ($role === 'Chef') {
                    header('Location: ../pages/homepageChef.php');
                } else {
                    $_SESSION['message'] = "Role not recognized.";
                    header('Location: ../pages/login.php');
                }
            } else {
                $_SESSION['message'] = "Invalid username or password.";
                header('Location: ../pages/login.php');
            }
        } else {
            $_SESSION['message'] = "Invalid username or password.";
            header('Location: ../pages/login.php');
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Please fill in all fields.";
        header('Location: ../pages/login.php');
    }
}
$conn->close();
?>
</body>
</html>