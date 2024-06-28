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
    <title>restaurants</title>
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
                <p>Trending Spicy Foods 😋</p>
            </div>
        </div>
    </div>



    <!-- recomended for you -->
    <section>
        <div class=" container service-item shadow-sm p-4 rounded"
            style="margin-top: 30px;background-color: #ac173a; color: white;">
            <div class="row">
                <div class="container col-md-12">
                    <h3 class="container" style="font-weight: 600; font-size: 26px;letter-spacing: 1px;">Offers
                    </h3>
                    <p class="container" style="color: rgb(255, 255, 255);">Up to 60% OFF, Flat Discounts, and other
                        great offers in below
                        restaurants</p>
                </div>
            </div>
        </div>

        <div class="col-md-12 container">

            <div class="row container-fluid">
                <div class="col-md-12">
                    <h3 class="text-center"
                        style="font-size: 18px;padding-top: 25px;color:gray;font-weight: 500;letter-spacing: 4px;">
                        RECOMENDED FOR YOU</h3>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="temptation.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/burger.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Vijayan Temptation</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Burger</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 40-50min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="icesquare.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/ice.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Ice Square</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Ice Cream</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 20-25min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="cakedilim.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/doughnut.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Cake Dilim</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Doughnut</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 20-30min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="7maadi.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/chicken.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">7 Maadi</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Chicken</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 30-45min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="wafflehouse.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/meal.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Waffle House</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Meals NonVegetarian</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 45-60min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="riyas kitchen.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/pasta.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Riyas Kitchen</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Pasta</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 25-35min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;">
                        <a href="Bhavan.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/veg.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Bhavan</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Meals Vegetarian</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 35-50min</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="padding-top: 20px;margin-bottom: 30px;">
                        <a href="fruit fiesta.php" style="text-decoration: none;color: black;">
                            <div class="card" style="border-radius: 15px;">
                                <img class="card-img-top" src="fooodieimages/fruits.png" alt="Card image"
                                    style="height: 200px;">
                                <div class="card-body">
                                    <h4 class="card-title">Fruit Fiesta</h4>
                                    <p class="card-text" style="color: gray;margin-left: 1px;">Fresh Fruits</p>
                                    <a href="#" style="text-decoration: none; color: gray; margin-top:20px;"><i
                                            class="fa-regular fa-clock"></i> 25-30min</a>
                                </div>
                            </div>
                        </a>
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