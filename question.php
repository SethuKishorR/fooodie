<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: signin.php");
    exit();
}

// Initialize the flag to indicate if the form was successfully submitted
$submissionSuccess = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $number = $_POST["number"];
    $question = $_POST["question"];
    $errors = array();

    if (empty($email) OR empty($number) OR empty($question)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($number) != 10) {
        array_push($errors, "Phone Number must be 10 characters long");
    }

    if (count($errors) === 0) {
        // Form submission handling code...
        // Assuming the form is submitted successfully, set the flag to true
        $submissionSuccess = true;
        require_once "database.php";
        $sql = "INSERT INTO questions (email, number, question) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "sss", $email, $number, $question);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
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
    <title>Ask Your Question</title>
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
    <div class="full-body" style="padding: 0px 5px 0px 5px;margin-top:px">
        <div class="container"> 
            <?php
            if ($submissionSuccess) {
                echo "<script>
                        window.addEventListener('DOMContentLoaded', function() {
                            alert('Form submitted successfully!');
                            window.location.href = 'home.php';
                        });
                       
                      </script>";
            }

            if (isset($_POST["submit"]) && !$submissionSuccess) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            ?>

<form action="question.php" method="post">
                <div style="padding-bottom: 20px; font-size: 23px; font-weight: 350; color:#036d7b; letter-spacing: 3px;" class="text-center">
                    <p>CREATE</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div> 
                <div class="form-group">
                    <input type="number" class="form-control" name="number" placeholder="Mobile Number">
                </div> 
                <div class="form-group">
                    <textarea class="form-control" name="question" rows="3" placeholder="Type Here"></textarea>
                </div>     
                <div class="text-center" style="padding-top: 20px"> 
                    <button type="submit" class="btn" name="submit"style="background-color:#036d7b;color:white;">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Your script and other content... -->

</body>
</html>
