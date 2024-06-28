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
    <title>payment details</title>
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
    </head>

<body class="bg-dark js-scroll-trigger">
<div class="container " style="margin-top: 30px;">
        <div class="  service-item shadow-sm p-3 rounded"
            style="background-color: #ffffff;margin-bottom: 60px; color: #ac173a;">
            <div class="row">
                <div class=" col-md-12">
                    <h3 class=" text-center"
                        style="font-weight: 700; font-size: 30px;letter-spacing: 3px; margin-top: 10px;">
                        PAYMENT
                    </h3>
                </div>
            </div>
        </div>
<div class="card col-md-7 mt-3" style="padding:25px 0 25px 45px; border: none;margin-bottom:10px;">
            <table>
                <tr>
                    <th style="width: 50%;">Subtotal</th>
                    <td style="width: 50%;">₹<span id="cart-total"></span></td>
                </tr>
            </table>
        </div>
<div class="card col-md-7" style="padding:25px 0 25px 40px; border: none;margin-bottom:10px;"  id="additional-charges" style="display: none;">
            <table class="table table-borderless">
                <tr scope="col">
                    <th style="width: 50%;font-size:15px;">GST and restaurant charges</th>    
                    <td style="width: 50%;font-size:15px;">₹17.75</td>           
                </tr>
                <tbody>
                <tr scope="col">
                    <th style="width: 50%;">Delivery charge</th>    
                    <td style="width: 50%;">₹49</td>         
                </tr>
               <div>
               <tr scope="col">
                <th style="width: 50%;"><div class="form-check mt-2 float-start" style="margin-left:-24px">
           <label class="form-check-label" for="flexCheckDefault">
           Cash on delivery (available)
           </label>
           </div></th>
           <td> <input class="form-check-input" style="margin:13px 0px 0px 2px" type="checkbox" value="" id="flexCheckDefault" required>
           </td>
                </tr>
               </div>
                </tbody>
               
        </table>
        </div>
        <div class="card col-md-7" style="padding:25px 0 25px 45px; border: none;margin-bottom:10px;">
            <table>
                <tr>
                    <th style="width: 50%;">Grandtotal</th>
                    <td style="width: 50%;">₹<span id="updated-total"></span></td>
                </tr>
               
            </table>
        </div>
        <div class="card col-md-7" style="margin-bottom: 10px;">
            <a href="details.php" class="btn float-start" style="padding:24.8px;font-weight:600"><span
                    class="float-start" style="margin-left:22px">Add Your Details</span><i
                    class="fa-solid fa-angles-right float-end mt-1"></i> </a>
        </div>
        <div class="col-md-7 mt-3">
    <a href="order.php"><button class="btn float-end mb-5" style="background-color:#ac173a;color:white">Place Order</button>
</a>    
    </div>
        

    <script>
        // Function to add 10 to the original total and update the "Updated Total" element
        function addTenToTotal() {
            // Get the current total from the element with ID "cart-total"
            let currentTotal = parseFloat($("#cart-total").text());

            // Check if the currentTotal is a valid number
            if (isNaN(currentTotal)) {
                console.error("Error: Invalid current total value.");
                return;
            }

            // Add 10 to the currentTotal
            let updatedTotal = currentTotal + 17.75 + 49;

            // Update the element with ID "updated-total" to display the updatedTotal
            $("#updated-total").text(updatedTotal.toFixed(2));
        }

        // Call the addTenToTotal function every 3 seconds (3000 milliseconds)
        setInterval(addTenToTotal, 1);
    </script>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="cart1.js"></script>
    <script src="cart.js"></script>
    <script src="navbar.js"></script>


    
</body>

</html>