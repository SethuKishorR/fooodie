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
    <title>FAQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="FAQ.css"> -->

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
                <p>Frequently Asked Questions</p>
            </div>
        </div>
    </div>
    <!-- FAQ -->
         <section class="My-Skills" id="My-Skills">
        <div class="container-lg" style="margin-bottom: 20px;">
            <div class="row text-center course" style="margin-top: 33px;">
                <div class="col-md-6 col-lg-3 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/question.png" alt="review"
                                style="height: 100px; width: 100px;border-radius: 50%;">
                        </div>
                        <h6 class="py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 1px;">Is Foodies Bread really baked fresh each day?
                        </h6>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/question.png" alt="review"
                                style="height: 100px; width: 100px;border-radius: 50%;">
                        </div>
                        <h6 class="py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 1px;">Do you bake breads containing animal fats?
                        </h6>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/question.png" alt="FAQ"
                                style="height: 100px; width: 100px;border-radius: 50%;">
                        </div>
                        <h6 class="py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 1px;">Can I order your products online?
                        </h6>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 my-2" style="padding:10px">
                    <div class="service-item shadow-sm p-4 bg-white" style="border-radius: 25px;">
                        <div class="icon my-3 text-danger fs-2">
                            <img src="fooodieimages/question.png" alt="review"
                                style="height: 100px; width: 100px;border-radius: 50%;">
                        </div>
                        <h6 class="py-1" style="color: #ac173a;font-weight: 700;letter-spacing: 1px;">When are you opening a shop near me?
                        </h6>
                        <div class=" container">
                            <hr>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel eius
                            consectetur voluptate fuga? Quos soluta sint, consectetur voluptatibus deleniti est?</p>
                    </div>
                </div>              
            </div>          
        </div>
               <div class="text-center py-6" style="margin-bottom:40px;">
                <p style="color:white; padding:20px 0px 0px 0px; font-size:18px;">Drop Your Question</p>
                <a href="question.php" class="btn btn-success py-1 px-3" style="color:white; ">DROP</a> 
                </div> 
    </section>

</body>

</html>