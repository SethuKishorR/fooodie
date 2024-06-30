<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: signin.php");
   exit();
}


// Initialize the flag to indicate if the form was successfully submitted
$submissionSuccess = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $instruction = $_POST["instruction"];

    $errors = array();

    if (empty($instruction)) {
        array_push($errors, "Instruction field is empty");
    }
  
    if (count($errors) === 0) {
        // Form submission handling code...
        // Assuming the form is submitted successfully, set the flag to true
        $submissionSuccess = true;
        require_once "database.php";
        $sql = "INSERT INTO instructions (instruction) VALUES ( ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "s",$instruction);
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
    <title>instruction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="instruction.css">

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:#ac173a;">
<?php
            if ($submissionSuccess) {
                echo "<script>
                        window.addEventListener('DOMContentLoaded', function() {
                            alert('Submitted!');
                            window.location.href = 'cart.php';
                        });
                       
                      </script>";
            }

            if (isset($_POST["submit"]) && !$submissionSuccess) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            ?> 

<div class="col-md-12 full-body" style="padding-top: 20px;border: none;;margin-bottom: 10px;">
        <div class="card" style="border-radius: 30px;background-color: transparent;width:350px;padding:10px;border:none;">
            <img class="card-img-top" src="fooodieimages/mail5.png" alt="Card image" style="height: 200px;">
            <div class="card-body" style="background-color: white;">
            <form action="instruction.php" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="instruction" rows="4" placeholder="Type Here"  style="border-color:#036d7b;"></textarea>
                </div>     
                <div class="text-center" style="padding-top: 1px"> 
                    <button type="submit" class="btn btn-success px-3" name="submit" style="font-size: 15px; margin: 13px; color: #ffffff;background-color:#036d7b;padding: 6px 2px; font-weight: 500; letter-spacing: 1.5px;border-radius:5px;font-size: 13px;">Submit</button>
                </div>
            </form>            
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="navbar.js"></script>

</body>
</html>