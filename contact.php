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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="contacts.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
</head>

<body class="contactbody" style="background-color:#ac173a;">
    <section class="Contact py-5 align-items-center d-flex " id="Contact">
        <div class="container-lg text-center py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="mb-4 text-white heading" style="font-size: 35px;font-weight: 700;letter-spacing: 3px;">
                            CONTACT</h2>
                        <p class=" text-white" style="margin-top: 30px;font-size: 18px;">To contact me directly, please
                            click the
                            buttons below to reach out through WhatsApp, phone, or LinkedIn. I look forward to
                            connecting with you!</p>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-3 my-2 text-center">
                    <a href="https://www.linkedin.com/in/sethu-kishor-ramasamy-380872255" class="hovering"
                        target=" _blank">
                        <div class="service-item p-4 shadow-sm bg-white"
                            style="border-radius: 17px; margin: 30px 30px 0 30px;;">
                            <div class="icon my-3 fs-2">
                                <img src="fooodieimages/linkedin.png" alt="linkedin" style="height: 50px; width: 50px;">
                            </div>
                            <p class="text-muted" style="font-size:17px;font-weight: 600;letter-spacing: 1.5px;">
                                Linkedin</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 my-2 text-center">
                    <a href="mailto:sethukishorramasamy@gmail.com" class="hovering" target="_blank">
                        <div class="service-item shadow-sm p-4 bg-white"
                            style="border-radius: 17px;margin: 30px 30px 0 30px;">
                            <div class="icon my-3 fs-2">
                                <img src="fooodieimages/gmail.png" alt="E-mail" style="height: 50px; width: 50px;">
                            </div>
                            <p class="text-muted" style="font-size:17px;font-weight: 600;letter-spacing: 1.5px;">E-mail
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 my-2 text-center">
                    <a href="tel:+91 8925638843" class="hovering" target=" _blank">
                        <div class="service-item shadow-sm p-4 bg-white"
                            style="border-radius: 17px;margin: 30px 30px 0 30px;">
                            <div class="icon my-3 fs-2">
                                <img src="fooodieimages/telephone-call.png" alt="Phone"
                                    style="height: 50px; width: 50px;">
                            </div>
                            <p class="text-muted" style="font-size:17px;font-weight: 600;letter-spacing: 1.5px;">Phone
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 my-2 text-center">
                    <a href="https://wa.me/918925638843" class="hovering" target=" _blank">
                        <div class="service-item shadow-sm p-4 bg-white"
                            style=" border-radius: 17px;margin: 30px 30px 0 30px;">
                            <div class="icon my-3 fs-2">
                                <img src="fooodieimages/whatsapp.png" alt="WhatsApp" style="height: 50px; width: 50px;">
                            </div>
                            <p class="text-muted" style="font-size:17px; font-weight: 600;letter-spacing: 1.5px;">
                                WhatsApp
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </section>
    <div class="container icon text-center align-items-center" style="color: white;margin-bottom: 50px;">
        <table class="table table-borderless">
            <tr>
                <p style="font-size: 18px;margin-bottom: 20px; font-weight: 500;">Checkout my Portfolio here
            </tr>
            <tr>
                <a href="https://sethukishor.000webhostapp.com/"> <img src="fooodieimages/profile.png" alt="profile"
                        style="height: 90px; width: 90px;"></a>
            </tr>
        </table>

        </p>
    </div>

    <!-- contact ends -->

</body>

</html>