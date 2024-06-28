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
    <title>cakedilim</title>
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
                <p>Celebrate Beautiful moments with Cake Dilim 🍰🎂</p>
            </div>
        </div>
    </div>
    <!-- recomended for you -->
    <section>
        <div class=" container service-item shadow-sm p-4 rounded"
            style="margin-top: 30px;background-color: #ac173a; color: white;">
            <div class="row">
                <div class="container col-md-12">
                    <h3 class="container" style="font-weight: 600; font-size: 26px;letter-spacing: 2px;">Cake Dilim
                    </h3>
                    <p class="container" style="color: rgb(255, 255, 255);letter-spacing: 1px;">Cakes · CupCakes ·
                        Drinks
                    </p>
                    <p> <button class="btn-success" style="border: none; border-radius: 3px;margin-left: 12px;"
                            disabled>4.5★</button> 47.3K
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
                            <img class="card-img-top" src="fooodieimages/cake4.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Cup Cake </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐
                                    17.5K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹80
                                </span>
                                <a class="btn add-to-cart float-end" data-id="17" data-name="Cup Cake" data-price="80"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/Raspberry Toppings .png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Raspberry Toppings</p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    11.6K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹110
                                </span>
                                <a class="btn add-to-cart float-end" data-id="18" data-name="Raspberry Toppings"
                                    data-price="110"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/bakedcake.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Varieties
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    7.6K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹145
                                </span>
                                <a class="btn add-to-cart float-end" data-id="19" data-name="Varieties" data-price="145"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/Chocolate Stick .png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Choco Stick Icecream
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    5.8K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹350
                                </span>
                                <a class="btn add-to-cart float-end" data-id="20" data-name="Choco Stick Icecream"
                                    data-price="350"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3" style="padding-top: 20px;margin-bottom: 30px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/cake3.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Vanilla Icecream Cake
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    8.3K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹450
                                </span>
                                <a class="btn add-to-cart float-end" data-id="21" data-name="Vanilla Icecream Cake"
                                    data-price="450"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/cake.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Cake with Fruit Toppings
                                </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    5.1K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹80
                                </span>
                                <a class="btn add-to-cart float-end" data-id="22" data-name="Cake with Fruit Toppings"
                                    data-price="80"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top"
                                src="fooodieimages/Vanilla Cake Topped With Chocolate And Syrup .png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Vanilla Cake </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐⭐
                                    9.3K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹450
                                </span>
                                <a class="btn add-to-cart float-end" data-id="23" data-name="Vanilla Cake"
                                    data-price="450"
                                    style="border-radius: 30px; background-color: #ac173a; border: #ac173a; outline: #ac173a; "><i
                                        class="fa-solid fa-cart-shopping"
                                        style="font-size: 13px; color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <div class="card" style="border-radius: 15px;">
                            <img class="card-img-top" src="fooodieimages/juice.png" alt="Card image"
                                style="height: 200px;">
                            <div class="card-body">
                                <p class="card-text" style="color: gray;margin-left: 1px;">Fruit Juice </p>
                                <span class="btn"
                                    style="margin-left: -14px;font-size: 15px;color: gray;border: none;">⭐⭐⭐⭐
                                    8.4K
                                    ratings</span> <br>
                                <span style="text-decoration: none; color: rgb(0, 0, 0); margin-top:20px;">₹140
                                </span>
                                <a class="btn add-to-cart float-end" data-id="24" data-name="Fruit Juice"
                                    data-price="140"
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