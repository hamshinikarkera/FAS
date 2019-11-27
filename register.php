

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
<!--    <link rel="stylesheet" type="text/css" href="styles.css">-->
    <!--<link rel="stylesheet" href="../CSS/bootstrap-4.1.3/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<style>
    html,body{
        background-image: url('image/fs.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container{
        height: 100%;
        align-content: center;
    }

    .card{
        height: 450px;
        margin-top:70px;
        margin-bottom: auto;
        width: 400px;
        background-color: black !important;
        margin-left: 780px;
    }

    /*.social_icon span{*/
    /*font-size: 60px;*/
    /*margin-left: 10px;*/
    /*color: #FFC312;*/
    /*}*/

    /*.social_icon span:hover{*/
    /*color: white;*/
    /*cursor: pointer;*/
    /*}*/

    .card-header h3{
        color: white;
    }

    /*.social_icon{*/
    /*position: absolute;*/
    /*right: 20px;*/
    /*top: -45px;*/
    /*}*/
</style>
<body>

<div class="container">
    <!--<a href="shop.html" style="margin-left: 1010px;margin-bottom: 60px ">logout</a>-->
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>REGISTER</h3>
                <!--<div class="d-flex justify-content-end social_icon">-->
                <!--<span><i class="fab fa-facebook-square"></i></span>-->
                <!--<span><i class="fab fa-google-plus-square"></i></span>-->
                <!--<span><i class="fab fa-twitter-square"></i></span>-->
                <!--</div>-->6
            </div>
            <div class="card-body">
                <form action="sellerregister.php" method="post">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="username"  name="sname"required >

                    </div>
                    <div class="input-group form-group">

                        <input type="password" class="form-control" placeholder="password" name="pass" required>
                    </div>
                    <div class="input-group form-group">

                        <input type="email" class="form-control" placeholder="email"  name="email" >

                    </div>
                    <div class="input-group form-group">

                        <input type="date" class="form-control" placeholder="DOB"  name="dob">

                    </div>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="contact"  name="phone"required >

                    </div>
                    <div class="input-group form-group">

                        <input type="text" class="form-control" placeholder="address"  name="address"required >

                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn float-right login_btn">
                    </div>
                    <div class="form-group">
                        <a href=""> <input type="reset" value="Reset" class="btn float-left"></a>
                    </div>
                </form>


            </div>

            <div class="card-footer">


            </div>
        </div>
    </div>
</div>

</body>
</html>
