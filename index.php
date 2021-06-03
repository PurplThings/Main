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
    <div class="part1">
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

    <div class="part2">
        <div class="row shadow-lg">
            <div class="col-sm-8 card  p-4" style="border: none;">
                <h1 class="text-purple text-center fw-bold" style="text-shadow: -3px 3px lightgrey;">VISION</h1><br><br>
                <h5 class="text-center">PurplThings provide competitive, high quality electronic services and products, 
                    whilst encouraging everyone to use creative and innovative products to help improve environment.</h5><br>
            </div>
            <div class="col-sm-4">
                <img src="Asset/images/img6.png" alt="Index_Img_1">
            </div>
        </div>
    </div>

    <br><br>

    <div class="part3">
        <div class="row shadow-lg">
            <div class="col-sm-8 p-4" style="border: none;">
                <h1 class="text-purple text-center fw-bold" style="text-shadow: -3px 3px lightgrey;">MISSION</h1><br><br>
                <h3 class="text-center">"Everyones go-to provider for electronic services."</h3><br>
                <div class="p-4">
                    <div class="row"><div class="col"><img src="Asset/images/green-tick.png" style="height: 20px;width:20px;"></div> <div class="col-11"><h5>Imply Continuous Process Improvement strategies to ensure the highest quality products and services.</h5></div></div>
                    <div class="row"><div class="col"><img src="Asset/images/green-tick.png" style="height: 20px;width:20px;"></div> <div class="col-11"><h5>Excel in innovation,quality,value addition,cost and On time delivery.</h5></div></div>
                    <div class="row"><div class="col"><img src="Asset/images/green-tick.png" style="height: 20px;width:20px;"></div> <div class="col-11"><h5>Foster long term partnership with customers and industry.</h5></div></div>
                    <div class="row"><div class="col"><img src="Asset/images/green-tick.png" style="height: 20px;width:20px;"></div> <div class="col-11"><h5>Learn, practice and teach & implement effective solutions for the Eco-System.</h5></div></div>
                </div>
            </div>
            <div class="col-sm-4 img">
                <img src="Asset/images/img7.png" alt="Index_Img_1">
            </div>
        </div>
    </div>

    <br><br>
    
    <div class="part4"><br>
        <h1 class="text-center fw-bold text-purple">VALUES</h1>
        <h5 class="text-center">Our values define the work</h5><br>
        <div class="row">

            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner shadow-lg">
                        <div class="flip-card-front text-center text-purple">
                            <h1>QUALITY</h1>
                        </div>
                        <div class="flip-card-back p-4">
                            <p>We don’t just talk about quality. It is ingrained in our daily missions. 
                                We have carefully developed our processes 
                                and procedures to ensure top quality products are delivered from time to time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner shadow-lg">
                        <div class="flip-card-front text-center text-purple">
                            <h1>FLEXIBILITY</h1>
                        </div>
                        <div class="flip-card-back p-4">
                            <p>We realize that every person, product and business has unique needs and doesn’t necessarily 
                                require usual models. That’s why we pride ourselves on our ability to adapt 
                                and tackle all challenges to meet the beneﬁcial outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner shadow-lg">
                        <div class="flip-card-front text-center text-purple">
                            <h1>RELIABILITY</h1>
                        </div>
                        <div class="flip-card-back p-4">
                            <p>Our clients, our people and our stakeholders rely on us for accuracy, validity, and dedication.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner shadow-lg">
                        <div class="flip-card-front text-center text-purple">
                            <h1>INTEGRITY</h1>
                        </div>
                        <div class="flip-card-back p-4">
                            <p>The foundation of our business is built on honesty, fairness and striving to 
                                achieve beneficial outcomes for everyone. By partnering with 
                                like-minded people and partners, we are continually driven to make the right decision.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><br><br>
    </div>

    <br><br>

    <!-- Container 1 -->
    <div class="part5">
        <div class="row shadow-lg">
            <div class="col-sm-6 card  p-4" style="border: none;">
                <h1 class="text-purple fw-bold">Internet of Things</h1><br><br>
                <h5 class="">describes the network of physical object-"things" that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the Internet.</h5><br>
                <a href="#" class="btn btn-outline-purple shadow-lg float-end">Research</a>
            </div>
            <div class="col-sm-6 card p-4" style="border: none;">
                <h1 class="text-purple fw-bold">Smart Electronics</h1><br><br>
                <h5 class="">Electronics in which the scope of the functionality grows beyond routine automation.leading to innovations which bring change to daily life in a decisive way.Leading to simpler lifes,</h5><br>
                <div class="btn-group">
                    <a href="#" class="btn btn-outline-purple shadow-lg float-end">Register for Session</a>
                    <a href="#" class="btn btn-outline-purple shadow-lg float-end">Register for Kit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Container 1 -->
    
        <br><br>
    <!-- About Us -->
    <div class="part6" id="aboutus">
        <div class="row px-2">
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/harsha.jpeg" alt="" style="width:100%">
                    <div class="px-1 text-center text-purple fw-bold"><br>
                    <p>G Harsha vardhan<br> CEO</p>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-purple" target="_blank" href="mailto:harshavardhan@purplthings.com"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-purple" target="_blank" href="tel:+919533333303"><i class="fas fa-phone-alt"></i></a>
                        <a class="btn btn-purple" target="_blank" href="https://wa.me/+919533333303?text=Hi Harsha Vardhan"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/likith.jpeg" alt="" style="width:100%">
                    <div class="px-1 text-center text-purple fw-bold"><br>
                    <p>Likith Reddy P<br> CRO</p>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-purple" target="_blank" href="mailto:likhith.p@purplthings.com"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-purple" target="_blank" href="tel:+917330190931"><i class="fas fa-phone-alt"></i></a>
                        <a class="btn btn-purple" target="_blank" href="https://wa.me/+917330190931?text=Hi Likhith"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/kethan.jpeg" alt="" style="width:100%">
                    <div class="px-1 text-center text-purple fw-bold"><br>
                    <p>Kethan Vemuri<br> CTO</p>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-purple" target="_blank" href="mailto:kethan.vemuri@purplthings.com"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-purple" target="_blank" href="tel:+917989216155"><i class="fas fa-phone-alt"></i></a>
                        <a class="btn btn-purple" target="_blank" href="https://wa.me/+917989216155?text=Hi Kethan"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-4">
                <div class="card shadow-lg">
                    <img src="Asset/images/jana.jpeg" alt="" style="width:100%">
                    <div class="px-1 text-center text-purple fw-bold"><br>
                    <p>M Janardhan Babu<br> CDO</p>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-purple" target="_blank" href="mailto:janardhan@purplthings.com"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-purple" target="_blank" href="tel:+919700870067"><i class="fas fa-phone-alt"></i></a>
                        <a class="btn btn-purple" target="_blank" href="https://wa.me/+919700870067?text=Hi Janardhan"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

<br><br>


<p id="demo"></p>

<script>
var w = window.innerWidth;
var h = window.innerHeight;

var x = document.getElementById("demo");
x.innerHTML = "Browser width: " + w + ", height: " + h + ".";
</script>
<br><br>
<?php include_once "Asset/util/footer.php"; ?>
</body>
</html>