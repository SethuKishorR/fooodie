<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: signin.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="js-scroll-trigger">

<head>
    <script src="./removeBanner.js"></script>
    <title>cart</title>
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
            <button class="navbar-toggler" type="button" style="border: none; outline: none;" data-bs-toggle="collapse"
                data-bs-target="#mynavbar">
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
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
</head>

<body class="bg-dark js-scroll-trigger">
    <!-- Cart Section -->
    <div class="container " style="margin-top: 130px;">
        <div class="  service-item shadow-sm p-3 rounded"
            style="background-color: #ffffff;margin-bottom: 60px; color: #ac173a;">
            <div class="row">
                <div class=" col-md-12">
                    <h3 class=" text-center"
                        style="font-weight: 700; font-size: 30px;letter-spacing: 3px; margin-top: 10px;">
                        CART ITEMS
                    </h3>
                </div>
            </div>
        </div>
        <div id="cart-items" class="row">
            <!-- Cart items will be dynamically added here -->
            <!-- Sample cart item card -->
            <!-- <div class="col-md-4">
                <div class="card" style="border-radius: 15px; padding: 10px;">
                    <img src="product_image.png" alt="Product Image">
                    <p>ITEM-NAME: Product Name</p>
                    <p>PRICE: ₹100</p>
                    <p>ITEM-COUNT: 2</p>
                </div>
            </div> -->
            <!-- End of sample cart item card -->
        </div>

        <div class="card col-md-7" style="margin-bottom: 10px;">
            <a href="instruction.php" class="btn float-start" style="padding:24.8px;font-weight:600"><span
                    class="float-start" style="margin-left:22px">Add cooking instructions</span><i
                    class="fa-solid fa-angles-right float-end mt-1"></i> </a>
        </div>

        <div class="card col-md-7" style="margin-bottom: 10px;">
            <a href="foods.php"
                style="text-decoration:none; color:black; font-weight:600;padding:25px;margin-left:22px">Add more
                items<i class="fa-solid fa-angles-right float-end mt-1"></i></a>
        </div>
        <div class="card col-md-7" style="padding:25px 0 25px 45px; border: none;margin-bottom:10px;">
            <table>
                <tr>
                    <th style="width: 50%;">Subtotal</th>
                    <td style="width: 50%;">₹<span id="cart-total"></span></td>
                </tr>
            </table>
        </div>
        <div class="col-md-7 mt-3">
            <!-- The "Payment" button, initially hidden -->
            <a href="pay.php" id="payment-button" class="btn px-3 float-end mb-5" style="display: none;background-color:#ac173a;color:white">Payment</a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="cart1.js"></script>
    <script src="cart.js"></script>
    <script src="navbar.js"></script>

    <script>
        // Function to check if there are items in the cart and show/hide the payment button
        function updatePaymentButton() {
            const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
            const paymentButton = $("#payment-button");
            if (cartItems.length > 0) {
                // Items in cart, show the payment button
                paymentButton.show();
            } else {
                // Cart is empty, hide the payment button
                paymentButton.hide();
            }
        }

        // Function to observe changes in the cart and update the payment button accordingly
        function observeCartChanges() {
            const cartObserver = new MutationObserver(updatePaymentButton);
            const cartItems = document.getElementById("cart-items");
            const config = { childList: true, subtree: true };
            cartObserver.observe(cartItems, config);
        }

        // Call updatePaymentButton function initially on page load
        $(document).ready(function() {
            updatePaymentButton();
            observeCartChanges();
        });

        // Function to simulate adding an item to the cart (Replace this with your actual add-to-cart logic)
        function addToCart(item) {
            // Your logic to add item to cart
            // For example:
            const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
            cartItems.push(item);
            localStorage.setItem("cartItems", JSON.stringify(cartItems));
        }

        // Function to simulate removing an item from the cart (Replace this with your actual remove-from-cart logic)
        function removeFromCart(itemId) {
            // Your logic to remove item from cart
            // For example:
            const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
            const updatedCartItems = cartItems.filter(item => item.id !== itemId);
            localStorage.setItem("cartItems", JSON.stringify(updatedCartItems));
        }

        // Event listener for adding an item to the cart (Replace this with your actual add-to-cart logic)
        $("#add-to-cart-button").on("click", function() {
            // Your logic to add the item to the cart
            // For example:
            const item = {
                id: 1,
                name: "Sample Item",
                price: 10.00,
                quantity: 1
            };

            addToCart(item);
        });

        // Event listener for removing an item from the cart (Replace this with your actual remove-from-cart logic)
        $("#remove-from-cart-button").on("click", function() {
            // Your logic to remove the item from the cart
            // For example, pass the item ID to removeFromCart function:
            const itemId = 1;

            removeFromCart(itemId);
        });
    </script>


</body>

</html>