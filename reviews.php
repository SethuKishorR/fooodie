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
    <title>Reviews</title>
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

<body class="js-scroll-trigger" style="background-color: #ac173a;">

    <!-- notification -->
    <div class="container" style="margin-top: 50px;">
        <div class="toast show">
            <div class="toast-header">
                <strong class="me-auto">Fooodie!</strong>
            </div>
            <div class="toast-body">
                <p>Our Customer Reviews</p>
            </div>
        </div>
    </div>



    <!-- review -->
    <section class="My-Skills" id="My-Skills">
        <div class="container-lg" style="margin-bottom: 20px;">
            <div class="row text-center course" style="margin-top: 33px;">
                <div class="col-md-6 col-lg-4 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/corousel1.jpg" alt="review"
                                style="height: 120px; width: 120px;border-radius: 50%;">
                        </div>
                        <h3 class="fs-5 py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 2px;">EMILY DAVIS
                        </h3>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/corousel2.jpg" alt="review"
                                style="height: 120px; width: 120px;border-radius: 50%;">
                        </div>
                        <h3 class="fs-5 py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 2px;">JOHNTHAN DOE
                        </h3>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/corousel3.jpg" alt="review"
                                style="height: 120px; width: 120px;border-radius: 50%;">
                        </div>
                        <h3 class="fs-5 py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 2px;">DANIEL BROWN
                        </h3>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>