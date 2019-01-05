<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAB</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/BookingCss.css">
    <link rel="stylesheet" href="dist/css/AdminCss.css">
    <style>
        #BookingForm {
            width: 100%;
            text-align: center;
            background-color: #ff0030;
            color: white;
        }

        #bookingTable #categoryTable{
            width: 1000px;
            padding-left: 100px;
        }
    </style>
</head>
<body>

<div id="Home">
    <!---------------------------------------Header of the Site (NAV-BAR)----------------------------------------------->
    <div id="header">
        <ul class=" nav justify-content-end" >
            <a id="logo" class="navbar-brand" href="#"><img id="logoImg" src="images/Fab-logo%20(1).png" alt="..." ></a>
            <li class="nav-item" >
                <a class="nav-link active" href="#">HOME</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#middle">About</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#exploreName">Explore</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#PlanName">Plans</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#Team">Team</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#Gallery">Portfolio</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#ContactForm">Contact</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#UserSignInForm">Details</a>
            </li>
        </ul>
    </div>

    <!----------------------------------------------Top Slide Show-------------------------------------------------------->
    <div id="slideShow">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/01.jpg" alt="First slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/02.jpg" alt="Second slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/03.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/04.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/05.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/06.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/07.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/08.jpg" alt="Third slide">
                    <div id="frontContent" class="carousel-caption d-none d-md-block">
                        <h5><img id="SlideLogo" class="rounded-circle" src="images/FabWhite.jpg"></h5>
                        <div id="SlideContent">
                            <h4>We Make Your Dreams Come True.!</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--------------------------------------------Middle Content----------------------------------------------------------->
    <div id="middle">
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading">ABOUT US.!</h2>
                <img id="Mlogo" src="images/Fab.com-logo-008.jpg" alt="..." class="img-thumbnail">
                <span class="text-muted">See YOURSELF through our CAMERA.!</span>
                <p class="clearfix">A very strong and diverse team captured over 2000 projects.</p>
                <h5 id="Cato" class="featurette-heading">We are Specialised at</h5>
                <ul>
                    <li>Candid Wedding Photography</li>
                    <li>Fashion & Event Photography</li>
                    <li>Birthday Photography</li>
                    <li>Cinematic Wedding Films</li>
                    <li>Protrait & Lifestyle Photography</li>
                    <li>Fine-Art Photography</li>
                </ul>
                <p class="float-right"><a href="#">Go To Top</a></p>
            </div>
            <div id="SideImg" class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="images/SideImg.jpg" alt="Generic placeholder image">
            </div>
        </div>
    </div>

    <!----------------------------------------Photography Category-------------------------------------------------------->
    <h2 id="exploreName" class="align-content-center ">EXPLORE</h2>
    <div id="Category">
        <div class="form-inline">
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/Wedding.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">Wedding</h6>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/Event.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">Fashion & Event</h6>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/BirthDay.png" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">BirthDay</h6>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/Cinematic.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">Cinematic</h6>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/LifeStyle.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">Protrait & LifeStyle</h6>
                </div>
            </div>
            <div class="card col-lg-2" style="width: 18rem;">
                <img class="card-img-top" src="images/FineArt.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-text">Fine-Art</h6>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------Plans------------------------------------------------------------------>
    <h2 id="PlanName" class="align-content-center ">OUR PLANS</h2>
    <div id="OurPlans">
        <div class="row justify-content-between">
            <div id="Plans" class="justify-content-between form-inline col-md-12 ">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Videography</h5>
                        <h6 class="sub">Wedding Dairy</h6>
                    </div>
                    <h6>Unlimited Video-Shoot</h6>
                    <br>
                    <h6>Edited Video</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>High Quality Videography</h6>
                    <div class="card-header"></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Fashion & Model</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>One Day Photo-Shoot</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>All Photos Will Be Delivered In DVD</h6>
                    <div class="card-header"></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Event</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>One Day Photo-Shoot</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>Printed All Photo</h6>
                    <div class="card-header"></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Cinematic</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>4R Printed Photo</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>Unlimited Photo-Shoot</h6>
                    <div class="card-header"></div>
                </div>
            </div>
        </div>
    </div>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>

    <!-----------------------------------------Gallery-------------------------------------------------------------------->
    <div id="Gallery">
        <div id="gal" class="container">

            <h2 class="heading">Portfolio</span></h2>

            <div class="gallery">

                <div class="gallery-item">
                    <img class="gallery-image" src="images/37F60FD200000578-0-image-a-5_1473156426673.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/vacanze.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/tctv-birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/solo-travel-confidence.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/rose-blue-flower-rose-blooms-67636.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/retirement-and-lifestyle-expo-sydney-events-retirementlivingtv.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/pre-wedding-day-photos-8-rainy-day-wedding-photography-tips-you-need-to-know-slr-lounge-2000-x-1333.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/One-Clue-Crossword-Birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen-Kaur-Pirzada.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Master.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/KN0396.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/iStock-534661459-copy.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/indian-pre-wedding-shoot-beach-durdle-door-05.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/img-6.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/images.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/image-after.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Event-management-1.png" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/default.947e7aff0713.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/CMS_Creative_559332799_Tree_Rings.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/636096742373357996142416222_fashion-beauty-tips-3.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/42198270_303.jpg" alt="">
                </div>
            </div>

        </div>
    </div>

    <!-------------------------------------------Team---------------------------------------------------------------------->
    <h2 id="teamName" class="align-content-center ">OUR TEAM</h2>
    <div id="Team" class="form-inline">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle" src="images/Alex.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Alex Whick</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle" src="images/Stela.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Stela Stepheny</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle" src="images/Jhon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Jhon shesh</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle" src="images/Ashen.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Ashen wane</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <p id="toTop" class="float-right"><a href="#">Go To Top</a></p>


    <!-------------------------------------User Sign Up Form---------------------------------------------------------------->
    <div id="UserSignInForm">
        <div id="signUpForm" class="jumbotron ">
            <h2>User Register for Booking</h2>
            <br>
            <form id="customerForm">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Name*" name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Contact No*" name="contact">
                    </div>
                </div>
            <br>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Email*" name="email">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Address*" name="address">
                    </div>
                </div>
            </form>
            <br>
            <button id="btnCustomerReg" type="button" class="btn btn-success">Register</button>
    <!--        <button id="btnLogin" type="button" class="btn btn-danger">Login</button>-->
        </div>
    </div>
    <!------------------------------Admin Login & Contact Details---------------------------------------------------------->
    <div id="ContactForm" class="form-inline">
        <div id="nonDiv"></div>
        <div id="contactDetails">
            <br>
            <h2 id="contactNames">Get In touch</h2>
            <br>
            <div id="contactBorder">
                <div class="form-inline">
                    <div id="imageIcon">
                        <img id="imgIcon" src="images/phone.png">
                    </div>
                    <div>
                        <h6>0915463728</h6>
                        <h6>0716472657</h6>
                    </div>
                </div>
                <br>
                <div class="form-inline">
                    <div id="imageIcon">
                        <img id="imgIcon" src="images/email.png">
                    </div>
                    <div>
                        <h6>infofab@gmail.com</h6>
                    </div>
                </div>
                <br>
                <div class="form-inline">
                    <div id="imageIcon">
                        <img id="imgIcon" src="images/location.png">
                    </div>
                    <div>
                        <h6> 238, High Level Road, Maharagama,</h6>
                        <h6>Colombo 10280.</h6>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div id="adminLoginForm" class="jumbotron">
            <h2 id="adminContent">Admin Login</h2>
            <br>
            <form>
                   <div class="col">
                       <input type="text" class="form-control" placeholder="User Name*">
                   </div>
                    <br>
                   <div class="col">
                       <input type="text" class="form-control" placeholder="Password*">
                   </div>
            </form>
            <br>
            <button id="btnAdminLogin" type="button" class="btn btn-danger">Login</button>
        </div>
    </div>
    <p id="toTop" class="float-right"><a href="#">Go To Top</a></p>
    <br>
    <br>
    <?php include "Footer.php"; ?>
</div>

<!--=====================================Customer Booking Form========================================================-->

<div id="Customer">
    <!---------------------------------------Header of the Site (NAV-BAR)----------------------------------------------->
    <div id="header" >
        <ul class=" nav justify-content-end " >
            <a id="logo" class="navbar-brand" href="#"><img id="logoImg" src="images/Fab-logo%20(1).png" alt="..." ></a>
            <li class="nav-item" >
                <a class="nav-link active" href="#">USER PANEL</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#CusGallery">Portfolio</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#Pacages">Our Pacages</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#Booking">Create Booking</a>
            </li>
        </ul>
    </div>

    <!-----------------------------------------Gallery-------------------------------------------------------------------->
    <div id="CusGallery">
        <div id="gal" class="container">

            <h2 class="heading">Portfolio</span></h2>

            <div class="gallery">

                <div class="gallery-item">
                    <img class="gallery-image" src="images/37F60FD200000578-0-image-a-5_1473156426673.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/vacanze.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/tctv-birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/solo-travel-confidence.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/rose-blue-flower-rose-blooms-67636.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/retirement-and-lifestyle-expo-sydney-events-retirementlivingtv.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/pre-wedding-day-photos-8-rainy-day-wedding-photography-tips-you-need-to-know-slr-lounge-2000-x-1333.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/One-Clue-Crossword-Birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen-Kaur-Pirzada.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Master.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/KN0396.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/iStock-534661459-copy.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/indian-pre-wedding-shoot-beach-durdle-door-05.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/img-6.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/images.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/image-after.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Event-management-1.png" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/default.947e7aff0713.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/CMS_Creative_559332799_Tree_Rings.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/636096742373357996142416222_fashion-beauty-tips-3.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/42198270_303.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>

    <!---------------------------------------------Plans------------------------------------------------------------------>
    <h2 id="Pacages" class="align-content-center ">OUR PLANS</h2>
    <div id="OurPlans">
        <div class="row justify-content-between">
            <div id="Plans" class="justify-content-between form-inline col-md-12 ">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Videography</h5>
                        <h6 class="sub">Wedding Dairy</h6>
                    </div>
                    <h6>Unlimited Video-Shoot</h6>
                    <br>
                    <h6>Edited Video</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>High Quality Videography</h6>
                    <div class="card-header"><p id="Price">One-Day = Rs.35000.00
                        <br>
                            Two-Day = Rs.60000.00
                        </p>
                    </div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Fashion & Model</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>One Day Photo-Shoot</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>All Photos Will Be Delivered In DVD</h6>
                    <div class="card-header"><p id="Price">One-Day = Rs.10000.00</p></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Event</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>One Day Photo-Shoot</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>Printed All Photo</h6>
                    <div class="card-header"><p id="Price">One-Day = Rs.10000.00</p></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Cinematic</h5>
                        <h6 class="sub">Photography</h6>
                    </div>
                    <h6>4R Printed Photo</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>Unlimited Photo-Shoot</h6>
                    <div class="card-header"><p id="Price">One-Day = Rs.20000.00</p></div>
                </div>

                <div class="card  m-3" style="width: 18rem;">
                    <div class="card-header">
                        <h5>Wedding</h5>
                        <h6 class="sub">Photography & Videography</h6>
                    </div>
                    <h6>High Quality Photo-Shoot</h6>
                    <br>
                    <h6>Edited Photo</h6>
                    <br>
                    <h6>High Quality Video-Shoot</h6>
                    <br>
                    <h6>Edited Video</h6>
                    <br>
                    <h6>Limited Time Delivery</h6>
                    <br>
                    <h6>Medium, Large, X-Large Albums</h6>
                    <div class="card-header"><p id="Price">Wedding = Rs.115000.00
                    <br>
                        Home-Comming = Rs.45000.00
                        <br>
                        Wedding + Home-Comming = Rs.135000.00</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>
    <br>
    <br>

<!---------------------------------------Booking Form------------------------------------------------------------------>
    <h2 id="Booking" class="align-content-center ">Booking Form</h2>
    <br>
    <div id="BookingForm">
        <form id="BookingCreatingForm" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCustomer">Customer</label>
                    <select id="inputCustomer" class="form-control" name="customer" required="required">
                        <option value="">Choose Your Name</option>

                        <?php
                        $sql=mysqli_query($con,"select * from Customer");
                        while($row=mysqli_fetch_array($sql))
                        {
                            ?>
                            <option value=""> <?php echo htmlentities($row['CName']);?> </option>
                        <?php } ?>

                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputName">Customer ID</label>
                    <input type="text" class="form-control" id="customerID" placeholder="Customer ID" name="customerID">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCategory">Category</label>
                    <select id="inputCategory" class="form-control" name="category" required="required">
                        <option value="">Choose Cateogory</option>

                        <?php
                        $sql=mysqli_query($con,"select * from Category");
                        while($row=mysqli_fetch_array($sql))
                        {
                            ?>
                            <option value=""> <?php echo htmlentities($row['CatName']);?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPacage">Pacage</label>
                    <input type="text" class="form-control" id="categoryPacage" placeholder="Pacage">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCategoryID">Category ID</label>
                    <input type="text" class="form-control" id="categoryID" placeholder="Category ID" name="categoryID">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPhotographer">Photographer</label>
                    <select id="inputPhotographer" class="form-control" name="photographer" required="required">
                        <option value="">Choose Photographer</option>

                        <?php
                        $sql=mysqli_query($con,"select * from Photographer");
                        while($row=mysqli_fetch_array($sql))
                        {
                            ?>
                            <option value=""> <?php echo htmlentities($row['PName']);?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPhotographer">Photographer ID</label>
                    <input type="text" class="form-control" id="photographerID" placeholder="Photographer ID" name="photographerID">
                </div>
            </div>
            <button id="btnCreateBooking" type="submit" class="btn btn-primary">Create Booking</button>
        </form>
        <br>
    </div>
    <br>
    <br>
    <?php include "Footer.php"; ?>

</div>

<!--=====================================Admin Panel=================================================================-->

<div id="Admin">
    <!---------------------------------------Header of the Site (NAV-BAR)----------------------------------------------->
    <div id="header" >
        <ul class=" nav justify-content-end " >
            <a id="logo" class="navbar-brand" href="#"><img id="logoImg" src="images/Fab-logo%20(1).png" alt="..." ></a>
            <li class="nav-item" >
                <a class="nav-link active" id="GoHome" href="#">Home</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#CusGallery">Portfolio</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#BookingView">View Bookings</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#ManageCategoryForm">Manage Category</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link" href="#ManagePhotographerForm">Manage Photographer</a>
            </li>
        </ul>
    </div>

    <!-----------------------------------------Gallery-------------------------------------------------------------------->
    <div id="CusGallery">
        <div id="gal" class="container">

            <h2 class="heading">Portfolio</span></h2>

            <div class="gallery">

                <div class="gallery-item">
                    <img class="gallery-image" src="images/37F60FD200000578-0-image-a-5_1473156426673.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/vacanze.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/tctv-birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/solo-travel-confidence.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/rose-blue-flower-rose-blooms-67636.jpeg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/retirement-and-lifestyle-expo-sydney-events-retirementlivingtv.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/pre-wedding-day-photos-8-rainy-day-wedding-photography-tips-you-need-to-know-slr-lounge-2000-x-1333.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/One-Clue-Crossword-Birthday.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Mehreen-Kaur-Pirzada.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Master.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/KN0396.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/iStock-534661459-copy.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/indian-pre-wedding-shoot-beach-durdle-door-05.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/img-6.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/images.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/image-after.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/Event-management-1.png" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/default.947e7aff0713.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/CMS_Creative_559332799_Tree_Rings.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/636096742373357996142416222_fashion-beauty-tips-3.jpg" alt="">
                </div>
                <div class="gallery-item">
                    <img class="gallery-image" src="images/42198270_303.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>
    <br>
    <br>

<!-------------------------------------------Booking View Form------------------------------------------------------------>
    <h2 id="BookingView" class="align-content-center ">BOOKING LIST</h2>
    <br>
    <div id="bookingTable">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Booking ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Category</th>
                <th scope="col">Photographer</th>
            </tr>
            </thead>
            <tbody>        </tbody>
        </table>
    </div>
    <br>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>
    <br>
<!----------------------------------------Category Form----------------------------------------------------------------->

    <div id="ManageCategoryForm">
        <div id="manageCategoryForm" class="jumbotron ">
            <h2>Manage Categories</h2>
            <br>
            <form id="categoryForm">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Name*" name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Description*" name="description">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Pacage*" name="pacage">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Price*" name="price">
                    </div>
                </div>
            </form>
            <br>
            <button id="btnAddCategory" type="button" class="btn btn-success">Add Category</button>
            <!--        <button id="btnLogin" type="button" class="btn btn-danger">Login</button>-->
        </div>
    </div>
    <br>
    <div id="categoryTable">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Pacage</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql=mysqli_query($con,"select *from category");
            $cnt=1;
            while($row=mysqli_fetch_array($sql))
            {
                ?>


                <tr>
                    <td><?php echo htmlentities($row['CatID']);?></td>
                    <td><?php echo htmlentities($row['CatName']);?></td>
                    <td><?php echo htmlentities($row['CatDesc']);?></td>
                    <td><?php echo htmlentities($row['Pacage']);?></td>
                    <td><?php echo htmlentities($row['Price']);?></td>
                </tr>
                <?php
                $cnt++;
            }?>

            </tbody>
        </table>
    </div>
    <br>
    <p id="teamName" class="float-right"><a href="#">Go To Top</a></p>
    <br>
    <!----------------------------------------Photographer Form----------------------------------------------------------------->

    <div id="ManagePhotographerForm">
        <div id="manageCategoryForm" class="jumbotron ">
            <h2>Manage Photographers</h2>
            <br>
            <form id="photographerForm">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Photographer Name*" name="pName">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Contact*" name="pContact">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Email*" name="pEmail">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" placeholder="Address*" name="pAddress">
                    </div>
                </div>
            </form>
            <br>
            <button id="btnAddPhotographer" type="button" class="btn btn-success">Add Photographer</button>
            <!--        <button id="btnLogin" type="button" class="btn btn-danger">Login</button>-->
        </div>
    </div>
<!--------------------------------------------------Photographer Table------------------------------------------------------>

    <div id="Photographer Table">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Photographer ID</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql=mysqli_query($con,"select *from photographer");
            $cnt=1;
            while($row=mysqli_fetch_array($sql))
            {
                ?>


                <tr>
                    <td><?php echo htmlentities($row['PID']);?></td>
                    <td><?php echo htmlentities($row['PName']);?></td>
                    <td><?php echo htmlentities($row['PContact']);?></td>
                    <td><?php echo htmlentities($row['PEmail']);?></td>
                    <td><?php echo htmlentities($row['PAddress']);?></td>
                </tr>
                <?php
                $cnt++;
            }?>

            </tbody>
        </table>
    </div>
    <br>
    <?php include "Footer.php"; ?>
</div>

<script src="dist/js/jquery-3.3.1.min.js" rel="script" type="text/javascript"></script>
<script src="dist/js/Customer.js"></script>
<script src="dist/js/Admin.js"></script>
<script src="dist/js/bootstrap.min.js" rel="script" type="text/javascript"></script>
<script>
    $('#btnCustomerReg').click(function () {
        let cusForm = $('#customerForm').serialize();
        $.ajax({
            url: "api/service/CustomerService.php",
            method: "POST",
            async: true,
            data: cusForm
        }).done(function (res) {
            alert(res);
        });
    });

    $('#btnCreateBooking').click(function () {
        let bookingForm = $('#BookingCreatingForm').serialize();
        $.ajax({
            url:"api/service/BookingService.php",
            method: "POST",
            async: true,
            data: bookingForm
        }).done(function (res) {
            alert(res);
        });
    });

    $('#inputCustomer').click(function () {
        $.ajax({
            url:"api/service/CustomerService.php",
            method:"GET",
            async: true,
            dataType:"json"
        }).done(function (res) {

            var abc=$('#inputCustomer').val();
            // alert("dfgdfg");
            for (var i in res){
                var temp=res[i];
                if(abc==temp[1]){
                    $('#customerID').val(temp[0]);
                }
            }

        });
    });

    $('#btnAddCategory').click(function () {
        let catForm = $('#categoryForm').serialize();
        $.ajax({
            url: "api/service/CategoryService.php",
            method: "POST",
            async: true,
            data: catForm
        }).done(function (res) {
            alert(res);
        });
    });

    $('#btnAddPhotographer').click(function () {
        let potForm = $('#photographerForm').serialize();
        $.ajax({
            url: "api/service/PhotographerService.php",
            method: "POST",
            async: true,
            data: potForm
        }).done(function (res) {
            alert(res);
        });
    });
</script>
</body>
</html>
<?php ?>