<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit();
}

// Initialize the flag to indicate if the registration was successful
$registrationSuccess = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if ($password !== $passwordRepeat) {
        array_push($errors, "Password does not match");
    }

    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);
        if ($rowCount > 0) {
            array_push($errors, "Email already exists!");
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Something went wrong");
    }

    if (count($errors) === 0) {
        $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            // Registration successful, set the flag to true
            $registrationSuccess = true;
        } else {
            die("Something went wrong");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="./removeBanner.js"></script>
    <title>Register</title>
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
        if ($registrationSuccess) {
            echo "<script>
                    window.addEventListener('DOMContentLoaded', function() {
                        alert('You are registered successfully!');
                        window.location.href = 'signin.php';
                    });
                  </script>";
        }

        if (isset($_POST["submit"]) && !$registrationSuccess) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
        ?>

<form action="register.php" method="post">
            <div style=" padding-bottom:20px; font-size:23px; font-weight:350; color:#036d7b;; letter-spacing: 3px;" class="text-center">
            <p>SIGN UP</p>
            </div>
        <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
       
        <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label text-secondary" for="flexCheckDefault">
        verified
        </label>
        </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn" value="Register" name="submit" style="background-color:#036d7b;color:white;">
        </div>
        <div>
            <p>already a user? <a href="signin.php" style="text-decoration:none; color:#036d7b;">Sign In</a></p>
        </div>
    </form>
    </div>
</div>

<script src="navbar.js"></script>

</body>
</html>
