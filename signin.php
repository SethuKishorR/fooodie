<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit();
}

// Initialize the flag to indicate if the login was successful
$loginSuccess = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                // Set session variables to mark the user as logged in
                $_SESSION["user"] = "yes";
                $_SESSION["user_email"] = $_POST["email"];
                // Login successful, set the flag to true
                $loginSuccess = true;
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Something went wrong");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="./removeBanner.js"></script>
    <title>Signin</title>
    <!-- Your head content here... -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="question.css">

</head>
<body class="js-scroll-trigger"> 
   
    <div class="full-body" style="padding: 0px 5px 0px 5px;">
        <div class="container">
            <?php
            if ($loginSuccess) {
                echo "<script>
                        window.addEventListener('DOMContentLoaded', function() {
                            alert('Signin successfully!');
                            window.location.href = 'home.php';
                        });
                      </script>";
            }
            ?>

<form action="signin.php" method="post">
        <div style=" padding-bottom:20px; font-size:23px; font-weight:350; color:#036d7b;; letter-spacing: 3px;" class="text-center">
            <p>SIGN IN</p>
            </div>
            <div class="form-group" >
                <input type="email" placeholder="example@gmail.com" name="email" class="form-control">
                
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn" style="background-color:#036d7b;color:white;">
            </div>
            <div style="padding-top: 28px">
            <p>Not registered yet? <a href="register.php" style="text-decoration:none; color:#036d7b;">Register Here</a></p>
        </div>
        </form>
        </div>
    </div>

    <script src="navbar.js"></script>

</body>
</html>
