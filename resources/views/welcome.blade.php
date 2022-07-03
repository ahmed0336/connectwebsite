<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect side </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .navbar-brand {
        font-weight: 600;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-shadow: 2px 2px blue;
    }

    a {
        text-decoration: none;
        color: #9d9d9d;
    }



    a:hover {
        color: #fff;
        text-decoration: underline solid #ff8800 50%;
        /* text-decoration: underline;
    text-decoration-color: #ff8800;
    text */
    }

    .startdiv {
        height: 10px;
        width: 100%;
        background-color: red;
        padding: 0px;
        margin: 0px;
        margin-top: 0px back
    }

    .w-100 {
        width: 100% !important;
        height: 600px;
    }



    .main1 {
        /* background-color: blue; */
        display: flex;
        flex-direction: row;


    }

    .subdiv {
        padding: 10px 50px;
    }

   

    .zpara {
        /* background-color: blue; */
        padding: 5px;
    }

    .subzpara {
        background-color: orange;
        text-align: center;
        position: absolute;
        /* left: 26px; */
        top: 25;
        /* z-index: -1; */
        /* z-index: 0; */
        top: 69%;
        left: 15%;
        width: 72%;
    }

    .navsub {
        display: flex;
        flex-direction: row;
    }

    .bg-orange {

        background-color: #ff8800;
    }

    .navbar-inverse {

        border-color: #080808;
        background-color: #222;
    }

    .navbar-inverse .navbar-nav>li>a {
        color: #9d9d9d;
    }

    .social-links a {
        display: inline-block;
        color: #ffffff;
        background-color: #9c9d9f;
        /* margin: 4px; */
        padding: 4px;
        font-size: 18px;
        border-radius: 50%;
        -webkit-transition: background-color 0.5s ease 0s;
        transition: background-color 0.5s ease 0s;
        margin: 5px 0px;
    }

    .apnacard {
        padding: 30px 0px;
    }



    .section-wrapper--gray {
        background-color: #f6f6f6;
    }

    .section-wrapper--dark {
        background-color: #000;
        text-align: center;
        color: #b2b2b2;
    }

    .section-header,
    .section-wrapper {
        position: relative;
        padding: 45px 0;
    }

    .section-heading strong {
        color: #ff8800;
    }

    b,
    strong {
        font-weight: 700;
    }

    .section-about .section-heading,
    .section-features .section-heading {
        margin-bottom: 35px;
        font-size: 36px;
        font-weight: bold;
    }

    .section-features {
        background-color: #ff8800;
    }

    .section-heading {
        position: relative;
        margin-top: 0;
        font-family: Roboto Slab, Helvetica, Arial, sans-serif;
    }

    .section-features .section-heading strong {
        color: #ffffff;
    }

    .section-features .feature {
        position: relative;
        padding-left: 90px;

    }

    .section-features .feature-title {
        color: #ffffff;
        font-size: 24px;
        font-weight: bold;
    }

    .section-features .feature-icon,
    .section-features .feature-title {
        text-align: left;
    }

    .section-features .feature--support {
        margin-bottom: 45px;
    }

    .section-features .feature {
        position: relative;
        padding-left: 90px;
    }

    .section-features .feature--support {
        margin-bottom: 45px;

    }

    .section-features .feature-icon {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        background-color: #cc6d00;
    }

    .section-features .feature-icon i[class^="fa"] {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 36px !important;
    }

    .feature-icon i[class^='fa'] {
        text-align: center;
        font-size: 50px;
    }

    .ultag {
        list-style: none;
        margin-top: 25px;
        font-size: 12px;
    }

    .ultag a {
        color: #000;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        margin-top: 2px;
    }

    /* .ultaglast 
    {
        font-size: 18px;
    margin-right: 10px;
    width: 18px;
    text-align: center;
    position: absolute;
    left: 0;
    text-decoration: none;
    list-style: none;
} */

    .ultaglast i[class^='fa'] {
        font-size: 18px;
        margin-right: 10px;
        width: 18px;
        text-align: center;
        position: absolute;
        left: 0;
        list-style: none;

    }

    .float {
        position: fixed;
        width: 60px;
        height: 46px;
        bottom: 40px;
        left: 1%;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .social-links a i[class^='fa'] {
        width: 26px;
        text-align: center;
        vertical-align: middle;
        color: #ffffff;
    }





    .navbar-inverse .scroll {
        background-color: rgba(0, 0, 0, 1) !important;
    }

    @media only screen and (max-width: 768px) {
        .main1 {
            display: flex;
            flex-direction: column;
            /* padding: px 5px; */
        }

        .subdiv {
            padding: 5px 5px;
        }

        /* .yaseen{
            display: none;
        } */



    }

    @media only screen and (max-width: 425px) {

        .abc {
            display: none;
        }


        .navbar-brand {
            display: none;
        }


        .navbar navbar-expand-lg navbar-light bg-light sticky-top py-3 px-3 {
            position: absolute;
        }

        .yaseen {
            position: absolute;
            left: 79px;
        }

    }



    @media only screen and (max-width: 769px) {
        .startdiv {
            display: none;
        }

        .abc {
            display: none;
        }

        .navbar-inverse {
            border-color: #fff;
            background-color: #fff;
        }
    }
</style>


<body style="padding-top: 0px; ">
    <div class="startdiv py-3 px-3">

    </div>
    <div class="abc">
        <div class="container">
            <div class="row">
                <div class="col-md-5 py-3">
                    <img class="" src="{{asset('images\connect-logo-original.png')}}" height="45px" alt="">
                </div>
                <div class="col-md-7">
                    <div class="navsub mt-3">
                        <span class="px-2" style="font-size: 12px;"> 24/7 Support: <i class="fa fa-arrow-circle-left px-2"></i></span>

                        <span class="px-2" style="font-size: 12px;">+9221-111-000-638 <i class="fa fa-envelope px-2"></i></span>
                        <span class="px-2 " style="font-size: 12px;">Email at Support</span>
                    </div>

                    <div class="social-links float-right mt-2">
                        <!-- <a href=""><i class="fa fa-facebook-square" style="font-size:24px"></i></a> -->
                        <a><i class="fa fa-facebook" aria-hidden="true" style="font-size:24px"></i></a>
                        <!-- <a href=""><i class="fa fa-linkedin-square" style="font-size:24px"></i></a> -->
                        <a><i class="fa fa-linkedin pb-1" aria-hidden="true" style="font-size:24px"></i></a>
                    </div>



                </div>
            </div>
        </div>
    </div>



    <nav class=" navbar navbar-inverse navbar-expand-lg navbar-light  sticky-top py-3 px-3 ">
        <a class="navbar-brand" href="#">CONNECT </a>
        <!-- new logo hai jo  display none kia hai large or mdeium size me -->
        <img class="yaseen d-lg-none d-md-none  " src="{{asset('images\connect-logo-original.png')}}" height="45px" alt="">
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <div class="main1">

                    <div class="subdiv">
                        <a href="">Home</a>
                    </div>
                    <div class="subdiv">
                        <a href="">About</a>
                    </div class="subdiv">
                    <div class="subdiv">
                        <a href="">Contact</a>
                    </div>
                    <div class="subdiv">
                        <a href="">Profile</a>
                    </div>
                    <div class="subdiv">
                        <a href="">ahmed</a>
                    </div>

                </div>
            </ul>
        </div>
    </nav>



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100  " src="{{asset('images\download.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid " src="{{asset('images\download.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{asset('images\download.jpg')}}" alt="First slide">
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

    <div class="zpara  ">
        <div class="subzpara">
            <h1>hello world</h1>
            <p>God will help you then you work hard</p>

        </div>

    </div>

    <section class="bg-orange">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1 class="hidden d-none">Connect Communications the Best and Fastest Internet</h1>
                    <p class="company-motto">All of us at Connect Communications understand that we will have to work harder and smarter every day to keep you as our customer.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="apnacard">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images\jacket.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images\jacket.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 ">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images\jacket.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images\jacket.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- section -->
    <section class="section-wrapper section-wrapper--gray">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h2 class="section-heading">
                        <span>About <strong>Connect</strong></span>
                    </h2>
                    <div class="section-description">
                        <p>Connect Communications was established in 2005 and we are the largest Internet &amp; Data Service Provider in Karachi. We offer various services to the corporate and consumer sectors.</p>
                        <p>Connect Communications is not only a name or a company. It is a passion, a desire to grow, serve and excel. It's success story is carved by untiring hard work, dedication and adherence of its team members to its cause. For our clients Connect Communications is a name which stands for its commitment, customer care, integrity, product knowledge, trouble free services and competitive prices.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="https://www.connect.net.pk:443/assets/custom/public/images/page/img-about.jpg" class="img-responsive img-thumbnail pull-left" alt="About Connect" title="About Connect">
                </div>
            </div>
        </div>

    </section>


    <section class="section-wrapper section-wrapper--gray section-features">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-center">
                        <span>Why <strong>Connect</strong></span>
                    </h2>
                </div>

                <div class="col-md-6">
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>
                    <div class="feature feature--support">
                        <p class="feature-icon text-white"><i class="fa fa-bolt" aria-hidden="true"></i></p>
                        <h3 class="feature-title">High Speed Internet</h3>
                        <p class="feature-text text--white">We offer high-speed internet plans to fulfill all your online needs for Household, Corporate and Enterprise customers.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="section-wrapper section-wrapper--gray">

        <div class="container">
            <div class="row">
                <div class="col-md-3 pl-0">
                    <img src="{{asset('images\connect-logo-original.png')}}" alt="">
                    <ul class="ultag">
                        <li>IP Address : 10.232.193.252</li>
                        <li>Wed, Mar 23, 2022 @ 16:37PKT</li>
                    </ul>
                </div>
                <div class="col-md-3 ">

                    <h1> <strong> Company </strong></h1>
                    <ul class="ultag">
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Support</a>
                        </li>
                        <li>
                            <a href="">Frequently Asked Questions</a>
                        </li>
                        <li>
                            <a href="">Career</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-3">
                    <h1> <strong> Company </strong></h1>
                    <ul class="ultag">
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Support</a>
                        </li>
                        <li>
                            <a href="">Frequently Asked Questions</a>
                        </li>
                        <li>
                            <a href="">Career</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-3">

                    <h1> <strong> Contact Us </strong></h1>
                    <ul class="ultaglast">
                        <li style="list-style: none;"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road Karachi, Pakistan</li>
                        <li style="list-style: none;"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road Karachi, Pakistan</li>
                        <li style="list-style: none;"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road Karachi, Pakistan</li>
                        <li style="list-style: none;"><i class="fa fa-map-marker-alt" aria-hidden="true"></i>86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road Karachi, Pakistan</li>
                    </ul>


                </div>
            </div>
        </div>

    </section>


    <section class="section-wrapper section-wrapper--dark">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© 2005-2022 Connect Communications. All Rights Reserved <span>
                </div>
            </div>
        </div>

    </section>


    <a href="https://api.whatsapp.com/send?phone=+923152120692&text=Thanks For Connecting Us" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>