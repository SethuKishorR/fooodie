<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: signin.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./removeBanner.js"></script>
    <title>order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="order.css">

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

<div class="full-body">
    <a href="home.php">
        <div class="col-md-12" style="padding-top: 20px;border: none;background-color: transparent;">
        <div class="card" style="background-color: transparent;border:none;">
            <img class="card-img-top" src="fooodieimages/order.png" alt="Card image" style="height: 250px;border-radius:5px;border:none;">
            <div style=" position: absolute; top: 20%;left: 50%;transform: translate(-50%, -50%);color:white;font-size:18px;letter-spacing:3px;font-weight:300">ORDER PLACED</div>
        </div>
        </div>
        </div>
    </a>
</div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="navbar.js"></script>

</body>
</html>