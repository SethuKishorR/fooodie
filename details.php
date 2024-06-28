<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: signin.php");
   exit();
}


// Initialize the flag to indicate if the form was successfully submitted
$submissionSuccess = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $CustomerName = $_POST["CustomerName"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $errors = array();

    if (empty($CustomerName) OR empty($email) OR empty($number) OR empty($address)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($number)!=10) {
        array_push($errors,"Phone Number must be 10 charactes long");
       }
    if (count($errors) === 0) {
        // Form submission handling code...
        // Assuming the form is submitted successfully, set the flag to true
        $submissionSuccess = true;
        require_once "database.php";
        $sql = "INSERT INTO details (CustomerName, email, number,address) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $CustomerName, $email,$number, $address);
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
    <title>Your Details</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="details.css">
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
   </head>
<body class="js-scroll-trigger"> 

<div class="full-body" style="padding: 0px 5px 0px 5px;margin-top:px">
        <div class="container col-md-5">
<?php
            if ($submissionSuccess) {
                echo "<script>
                        window.addEventListener('DOMContentLoaded', function() {
                            alert('Saved!');
                            window.location.href = 'pay.php';
                        });
                       
                      </script>";
            }

            if (isset($_POST["submit"]) && !$submissionSuccess) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            ?> 

<form action="details.php" method="post">
            <div style=" padding-bottom:20px; font-size:23px; font-weight:350; color:#036d7b; letter-spacing: 3px;" class="text-center">
             <p>USER DETAILS</p>
            </div>
        <div class="form-group">
            <input type="text" class="form-control" name="CustomerName" placeholder="Customer Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
                <input type="number" class="form-control" name="number" placeholder="Phone Number">
        </div>
        <div class="form-group">
                <textarea class="form-control" name="address"  rows="3" placeholder="Address"></textarea>
             <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
        <label class="form-check-label text-secondary" for="flexCheckDefault">
        verified
        </label>
        </div>
        </div> 
        <div class="text-center" style="padding-top: 20px"> 
                    <button type="submit" class="btn px-3" name="submit" style="background-color:#036d7b;color:white;">Save</button>
                </div>
    </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="navbar.js"></script>

</body>
</html>