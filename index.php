<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./removeBanner.js"></script>
    <title>Fooodie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index1.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light navbar-dark js-scroll-trigger"
        style="background-color:white">
        <div class="container-fluid">
            <div></div>
            <button class="navbar-toggler js-scroll-trigger" style="border: none; outline: none;" type="button"
                data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon" style="color:black;"><i class="fa-solid fa-bars" style="color:#ac173a;font-size:25px;padding-top:15px;"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end responsive" id="mynavbar">
                <ul class="navbar-nav fs-6  ms-auto mb-2 mb-lg-0" style="letter-spacing: 1px;"
                    aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="register.php">REGISTER</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="signin.php">SIGNIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
</head>

<body class="js-scroll-trigger" style="background-color:white;">
    <!-- The Modal -->
    <div class="modal" id="myModal" style="margin-top: 70px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Foodiee!</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    Enjoy our premium experience🤩🥳
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <!-- filter start -->
    <div class="modal" id="filter">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #ffffff;">
                <div class="modal-header" style="border: none;">
                    <h4 class="modal-title" style="font-size: 20px;font-weight: 600;color:#A82C48;">
                        Fooodie!</h4>
                </div>
                <div class="toast-body" style="padding-bottom: 23px;margin-left: 15px;">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="icecream.php" class="me-auto btn text-center icecream shadow-sm"
                                style="height: 50px;width: 50px;">
                            </a>
                            <p style="font-weight: 500; color:gray ; font-size: 12px; margin-left: -2px;">IceCream</p>
                        </div>
                        <div class="col-sm-2">
                            <a href="snax.php" class="me-auto btn text-center snax shadow-sm"
                                style="height: 50px;width: 50px; margin-left: 2px;">
                            </a>
                            <p style="font-weight: 500; color:gray ; font-size: 12px;margin-left: 12px;">Snax</p>
                        </div>
                        <div class="col-sm-2">
                            <a href="pizza.php" class="me-auto btn text-center pizza shadow-sm"
                                style="height: 50px;width: 50px; margin-left: 2px;">
                            </a>
                            <p style="font-weight: 500; color:gray ; font-size: 12px;margin-left: 10px;">Pizza</p>
                        </div>
                        <div class="col-sm-2">
                            <a href="juice.php" class="me-auto btn text-center juice shadow-sm"
                                style="height: 50px;width: 50px; margin-left: 2px;">
                            </a>
                            <p style="font-weight: 500; color:gray ; font-size: 12px;margin-left: 12px;">Juice</p>
                        </div>
                        <div class="col-sm-2">
                            <a href="cake.php" class="me-auto btn text-center cake shadow-sm"
                                style="height: 50px;width: 50px; margin-left: 2px;">
                            </a>
                            <p style="font-weight: 500; color:gray ; font-size: 12px;margin-left: 12px;">Cake</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border: none;">
                <button type="button" class="btn btn-danger"
                    style="height: 30px; line-height: 12px; padding-bottom: 8px;" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <!-- filter end -->
    <!-- section-1 top-banner -->
    <section id="home" class="js-scroll-trigger">
        <div class="container-fluid top-banner">
            <div class="text-center fooodie">
                <a class="navbar-brand js-scroll-trigger heading"
                    style="font-weight: 400;font-size: 80px; border: none;outline: none;color:#ac173a;"
                    data-bs-toggle="modal" data-bs-target="#myModal" href="#">Fooodie.!</a>
                    <p class="text-center" style="font-weight:500; letter-spacing:2px;color:#ac173a;">Good food choices are good investments</p>
            </div>
        </div>
        </div>
    </section>
    <!--counter start  -->
    <section class="counter-section fixed-bottom" id="counter">
        <div class="container-fluid text-center" style="background-color:white ;color: #ac173a; padding: 8px 0 0 0;">
            <div class="row">
                <div class="col-md-12 text-center" style="font-weight: 600;letter-spacing: 4px;">
                    <h2>
                        <span id="count1"></span>+
                    </h2>
                    <p>ORDERS LIVE</p>
                </div>
            </div>
        </div>
    </section>
    <!-- counter ends -->
    <!-- js library -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <!-- my js file -->
    <script src="index.js"></script>
    <script src="navbar.js"></script>
    

</body>

</html>