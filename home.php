<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--<link src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<style>

    /*body{*/
    /*margin:0;*/
    /*background-repeat: no-repeat;*/
    /*background-image: url('../images/img11.jpg');*/
    /*background-size : 100%;*/
    /*font-family:arial,helvetica,sans-serif;*/
    /*background-repeat: no-repeat;*/
    /*position: relative;*/
    /*}*/
    /*#section1 { padding-top: 644px;*/
    /*background-image: url('images/img5.jpg');*/
    /*background-repeat: no-repeat;*/
    /*background-size: 100%;*/
    /*height: 1010%;*/
    /*}*/

    /*#section2 {padding-top: 180px;*/
    /*background-image: url('images/img5.jpg');*/
    /*background-repeat: no-repeat;*/
    /*background-size: 100%;*/
    /*height: 1010%;}*/
    /*#section3 {padding-top: 400px;*/
    /*background-image: url('../images/dog3.jpg');*/
    /*background-repeat: no-repeat;*/
    /*background-size: 100%;*/
    /*height: 1010%;}*/
    /*#section4 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}*/
    /*#section5 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}*/

    .header {
        text-align: center;
        padding: 32px;
        color: #0c5460;
    }
    .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 0px solid #f1f1f1;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 50%;
        padding: 30px;
        text-align: center;

    }
    /*.bg-img {*/
    /*!* The image used *!*/
    /*background-image: url("images/img5.jpg");*/

    /*!* Add the blur effect *!*/
    /*filter: blur(8px);*/
    /*-webkit-filter: blur(8px);*/

    /*!* Full height *!*/
    /*height: 100%;*/
    /*width: 100%;*/

    /*!* Center and scale the image nicely *!*/
    /*background-position: center;*/
    /*background-repeat: no-repeat;*/
    /*background-size: cover;*/
    /*}*/
    /*!*.column {*!*/
    /*float: left;*/
    /*width: 33.33%;*/
    /*padding: 5px;*/
    /*}*/


    /*.row::after {*/
    /*content: "";*/
    /*clear: both;*/
    /*display: table;*/
    /*}*/
h1{
    color: #00b0ff;
    margin-top: 110px;
    font-size: 50px;
    margin-left: 500px;
    font-family:"jocker";
}


</style>
<body style="background-image: url('image/fff.jpg');background-repeat: no-repeat;background-size: 100%">
<h1>FISH AUCTION SYSTEM</h1>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <li class="active"><a class="navbar-brand" href="#" style="font-family: Jokerman"></a></li>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#about">Home</a></li>
                <li><a href="buyerlogin.html">BUYERS</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="sellerlogin.html">SELLER</a>

                <li><a href="admin.html"><span class="glyphicon glyphicon-user"></span> ADMIN</a></li>
                <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Feedback</a></li>-->


            </ul>
        </div>
    </div>

</nav>
<section  style="background:rgba(0.0,0.0,0.0,0.5)">
    <div class="main_content_content">

<!---->
<!--        <div class="main_sub"   style="color: #cd0a0a;font-family: 'Great Vibes'">-->
<!--            Fish lovers are always the best,grab your favorite soon......<br/>-->
<!--            The online fish auction application consist of two application ,namely the application-->
<!--            for an auctioneer and customers.thus, the application can introduce the fish auction to-->
<!--            the general public,so that the participants of the auction and the fishermens income will-->
<!--            be increased.-->
<!--        </div>-->
        <div style="margin-top: 33%;">
            <div class="image_section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                                <img src="image/red fish.jpg" alt="Lights" style="width:150%;">

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                                <img src="image/bangda fish.jpg" alt="Nature" style="width:100%">

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="#" target="_blank">
                                <img src="image/bondas%20fish.jpg" alt="Fjords" style="width:100%">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



</body>
</html>
