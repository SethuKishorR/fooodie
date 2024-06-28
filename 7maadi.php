<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./removeBanner.js"></script>
    <title>7Maadi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm fixed-top navbar-light navbar-dark" style="background-color: #ac173a;">
        <div class="container-fluid">
            <a class="navbar-brand text-white  fs-4 js-scroll-trigger heading"
                style="letter-spacing: 3px; padding:15px 0; font-weight: 600;" href="#">Fooodie!</a>
            <button class="navbar-toggler" type="button" style="border: none; outline: none;" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end responsive" id="mynavbar">
                <ul class="navbar-nav text-white fs-6" style="letter-spacing: 1px;"
                    aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="reviews.php">REVIEWS</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link js-scroll-trigger" href="cart.php">MY CART</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
</head>

<body class="bg-light js-scroll-trigger">
    <div id="floating-cart-counter" class="floating-counter">0</div>
    <!-- notification -->
    <div class="container" style="margin-top: 100px;margin-left: 0px;">
        <div class="toast show">
            <div class="toast-header">
                <strong class="me-auto">Fooodie!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                <p>Order Your Food Now 🍔🍕</p>
            </div>
        </div>
    </div>
    <!-- recomended for you -->
    <section>
        <div class=" container service-item shadow-sm p-4 rounded"
            style="margin-top: 30px;background-color: #ac173a; color: white;">
            <div class="row">
                <div class="container col-md-12">
                    <h3 class="container" style="font-weight: 600; font-size: 26px;letter-spacing: 2px;">7 Maadi
                    </h3>
                    <p class="container" style="color: rgb(255, 255, 255);letter-spacing: 1px;">Pizza · Chocolate ·
                        Fast Food
                    </p>
                    <p> <button class="btn-success" style="border: none; border-radius: 3px;margin-left: 12px;"
                            disabled>4.0★</button> 4.3K
                        reviews</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 container">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <h3 class="text-center"
                        style="font-size: 18px;padding-top: 25px;color:gray;font-weight: 500;letter-spacing: 4px;margin-top: 5px;">
                        RECOMENDED FOR YOU</h3>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/pizza.jpg" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Pizza </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    7.3K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹180
                                </span>
                                <a class="btn add-to-cart float-end" data-id="25" data-name="Pizza" data-price="180"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/choco.jpeg" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Chocolate</p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    3.6K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹220
                                </span>
                                <a class="btn add-to-cart float-end" data-id="26" data-name="Chocolate" data-price="220"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top"
                                src="fooodieimages/Cake On White Ceramic Plate Cake On White Ceramic Plate .png"
                                alt="Card image" style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Cake Creamy
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐
                                    3.2K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹115
                                </span>
                                <a class="btn add-to-cart float-end" data-id="27" data-name="Cake Creamy"
                                    data-price="115"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/Pasta With Green Leaf And Chili Pepper .png"
                                alt="Card image" style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Pasta
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    4.4K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹160
                                </span>
                                <a class="btn add-to-cart float-end" data-id="28" data-name="Pasta" data-price="160"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/coke.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Pizza & Coke </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    5.9K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹299
                                </span>
                                <a class="btn add-to-cart float-end" data-id="29" data-name="Pizza & Coke"
                                    data-price="299"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/Fries and Burger on Plate .png"
                                alt="Card image" style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Fries & Burger
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    3.7K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹150
                                </span>
                                <a class="btn add-to-cart float-end" data-id="30" data-name="Fries & Burger"
                                    data-price="150"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/fried chicken.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Fried Chicken </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    7.3K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹310
                                </span>
                                <a class="btn add-to-cart float-end" data-id="31" data-name="Fried Chicken"
                                    data-price="310"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;margin-bottom: 30px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/Sandwich And Slice Of Lemons .png"
                                alt="Card image" style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Sandwich </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐
                                    2.8K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹120
                                </span>
                                <a class="btn add-to-cart float-end" data-id="32" data-name="Sandwich" data-price="120"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="cart.js"></script>
    <script src="cart1.js"></script>
    <script src="navbar.js"></script>

</body>

</html>