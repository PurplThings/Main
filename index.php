<?php
    session_start();
    error_reporting(0);
    if(isset($_GET['msg'])){
      $e_msg = $_GET['msg'];
    }
    if($_SESSION['logintype']=="user"){
        header("location:Users/home.php");
    }else if($_SESSION['logintype'] == "admin"){
        header("location:Admin/home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purple Things</title>
    <link rel="stylesheet" href="Asset/styles/styles.css">
    <?php require_once 'Asset/util/index_require.php';?>
    
</head>
<body class="scrollbar">

    <!-- Nvaigation bar -->
    <?php require 'Asset/util/opennav.php';?>
    <!-- End Navigation bar -->

    <!-- Carousel Begin -->
    <div class="part2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="Asset/images/slide1.jpeg" class="d-block w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                     <h5>Innovation</h5>
                    <p>Innovation is production or adoption, assimilation, and exploitation of a value-added novelty in economic and social spheres</p> 
                </div>
                </div>
                <div class="carousel-item">
                <img src="Asset/images/slide2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p> -->
                </div>
                </div>
                <div class="carousel-item">
                <img src="Asset/images/slide3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                </div>
                </div>
                <div class="carousel-item">
                <img src="Asset/images/slide4.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                </div>
                </div>
                <div class="carousel-item">
                <img src="Asset/images/slide6.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Carousel -->

    <br><br>

    <!-- Container 1 -->
    <div class="container part1">
        <div class="row">
            <div class="col-sm-6 card shadow-lg p-4" style="border: none;">
                <h1 class="text-purple fw-bold">Internet of Things</h1><br><br>
                <h5 class="">describes the network of physical object-"things" that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the Internet.</h5><br>
                <a href="#" class="btn btn-outline-purple shadow-lg float-end">Research</a>
            </div>
            <div class="col-sm-6">
                <img src="Asset/images/img6.png" alt="Index_Img_1">
            </div>
        </div>
    </div>
    <!-- END Container 1 -->
    <br><br>
    <!-- Container 2 -->
    <div class="container part3">
        <div class="row">
            <div class="col-sm-6 img">
                <img src="Asset/images/img7.png" alt="Index_Img_1">
            </div>
            <div class="col-sm-6 card shadow-lg p-4" style="border: none;">
                <h1 class="text-purple fw-bold">Smart Electronics</h1><br><br>
                <h5 class="">Electronics in which the scope of the functionality grows beyond routine automation.leading to innovations which bring change to daily life in a decisive way.Leading to simpler lifes,</h5><br>
                <div class="btn-group">
                    <a href="#" class="btn btn-outline-purple shadow-lg float-end">Register for Session</a>
                    <a href="#" class="btn btn-outline-purple shadow-lg float-end">Register for Kit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Container 2 -->
    
    
        <br><br>
    <!-- About Us -->
    <div class="container" id="aboutus">
        <div class="row px-2">
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/harsha.jpeg" alt="" style="width:100%">
                    <div class="container text-center text-purple fw-bold"><br>
                    <p>Harshavardhan G <br> CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/likith.jpeg" alt="" style="width:100%">
                    <div class="container text-center text-purple fw-bold"><br>
                    <p>Likith P <br> CRO</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/kethan.jpeg" alt="" style="width:100%">
                    <div class="container text-center text-purple fw-bold"><br>
                    <p>Kethan Vemuri <br> CTO</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/jana.jpeg" alt="" style="width:100%">
                    <div class="container text-center text-purple fw-bold"><br>
                    <p>Janardhan Babu M <br> COD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

<br><br><br><br>
<?php include_once "Asset/util/footer.php"; ?>
</body>
</html>