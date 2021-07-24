<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/utilities.css">
    <link rel="stylesheet" href="assets/css/root.css">
    <title>Welcome - DivaTaxi</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="left-section">
            <div class="text-container">
                <div class="text1">NEED A RIDE?</div>
                <div class="text2">Order a taxi with</div>
                <div class="text3">DIVATAXI</div>
                <div class="btns-container">
                    <a href="">
                        <img src="assets/images/svg/playstore.svg" alt="" class="playstore">
                    </a>
                    <a href="">
                        <img src="assets/images/svg/apple.svg" alt="" class="apple">
                    </a>
                </div>
            </div>
        </div>
        <div class="right-section">
            <img src="assets/images/svg/car.svg" alt="" class="car">
        </div>
    </section>



    <section class="how-it-works">
        <div class="section-title">How It Works</div>
        <div class="box-container">
            <div class="row1">
                <div class="box" data-aos="fade-up" data-aos-duration="500">
                    <div class="number-container">
                        <button class="number">1</button>
                    </div>
                    <div class="box-title">Request a car</div>
                    <div class="box-content">
                        Open the app, enter your <br> location and desired destination.
                    </div>
                </div>

                <div class="box" data-aos="fade-up" data-aos-duration="1000">
                    <div class="number-container right">
                        <button class="number right">2</button>
                    </div>
                    <div class="box-title right">Start moving</div>
                    <div class="box-content right">
                        Watch the driver on the map as he <br> drivers you from your location.
                    </div>
                </div>

                <div class="box box3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="number-container">
                        <button class="number">3</button>
                    </div>
                    <div class="box-title">Request a car</div>
                    <div class="box-content">
                        Open the app, enter your <br>location and desired destination.
                    </div>
                </div>

                <div class="box box4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="number-container right">
                        <button class="number right">4</button>
                    </div>
                    <div class="box-title right">Start moving</div>
                    <div class="box-content right">
                        Watch the driver on the map as <br> he drivers you from your location.
                    </div>
                </div>

                <!-- <div class="box box5">
                <img src="assets/images/svg/circle.svg" class="circle" alt="">
            </div> -->
            </div>

            <div class="row2">
                <img src="assets/images/svg/circle.svg" class="circle" data-aos="zoom-in" data-aos-duration="1000" alt="">
            </div>
    </section>



    <section class="banner-section">
        <img src="assets/images/about.jpg" alt="" class="image-overlay">
        <div class="div-overlay"></div>
        <div class="main-overlay">
            <div class="section-title">Need to Make Some <br> Extra Cash?</div>
            <div class="btn-container">
                <a href="become-a-driver" class="become-a-driver-btn">Become a driver</a>
            </div>
        </div>
    </section>

    <section class="why-section">
        <div class="left-section">

        </div>
        <div class="right-section">
            <div class="section-title">Why DivaTaxi?</div>
            <div class="box" data-aos="fade-up" data-aos-duration="500">
                <div class="row1">
                    <img src="assets/images/svg/fast-internet-speed.svg" alt="">
                </div>
                <div class="row2">
                    <div class="row-title">PROMPT</div>
                    <div class="row-content">Get to your destination fast always.</div>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="1000">
                <div class="row1">
                    <img src="assets/images/svg/shield-lock-line.svg" alt="">
                </div>
                <div class="row2">
                    <div class="row-title">SAFE AND SECURED</div>
                    <div class="row-content">Moving with DivaTaxi is very secured and easy.</div>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-duration="1500">
                <div class="row1">
                    <img src="assets/images/svg/fast-internet-speed.svg" alt="">
                </div>
                <div class="row2">
                    <div class="row-title">HAPPY CUSTOMERS</div>
                    <div class="row-content">We leave you a happy and satisfied customer.</div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/root.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>