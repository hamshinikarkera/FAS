<!DOCTYPE html>
<html>
<head>
    <meta name="viewport"content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet"href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            font-family:arial,helvetica,sans-serif;}
        * {box-sizing:border-box;}
        .input-container{
            display:-ms-flexbox;
            display:flex;
            width:100%;
            height: 46px;
            margin-bottom:15px;
        }
        body{
            margin:0;
            background:url("image/bangda fish.jpg") no-repeat;
            background-size : cover;
            font-family:arial,helvetica,sans-serif;
        }
        .icon{
            padding:10px;
            background:black;
            color:white;
            min-width:50px;
            text-align:center;
        }
        .input-field:focus{
            border:2px solid dodgerblue;
        }
        .btn{
            background-color:black;
            color:white;
            padding:15px 20px;
            border:none;
            cursor:pointer;
            width:100%;
            opacity:0.9;
        }

        .btn:hover{
            opocity:1;
        }


        .card-header h3{
            color: white;
        }
        .card{
            height: 370px;
            margin-bottom: auto;
            width: 250px;
            margin-top: 110px;
            margin-left: 780px;
            background-color: gray !important;
        }
        h3{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>AUCTION</h3>
            </div>
            <!--<label style="font-size:30px;margin-left:320px;color:black">REGISTER HERE</label>-->
            <div class="card-body">
                <form action="home.php" style="max-width:500px;margin:auto" method="post">
                    <!-- <h2> REGISTRATION FORM</h2> -->
                    <table>
                        <?php
                        include 'connection.php';

                        $query="select bname from buyer";
                        $query2="select pname from addproduct";
                        $query1="select sname from seller";
                        $res=mysqli_query($conn,$query);
                        $res1=mysqli_query($conn,$query1);
                        $res2=mysqli_query($conn,$query2);
                        ?>

                        <tr>
                            <td>
                                <div class="input-container">
                                    <i class="fa fa-paw icon">
                                    </i>
                                    <select  style="width: 100px" name="bname" id="">
                                        <option>buyername</option>

                                        <?php while($row=mysqli_fetch_array($res)):;?>
                                            <option type="text" name=bname" value="<?php echo $row['bname'];?>"><?php echo $row['bname'];?></option>
                                        <?php endwhile;?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                <div class="input-container">
                                    <i class="fa fa-paw icon">
                                    </i>


                                    <select  style="width: 100px" name="pname" id="">
                                        <option>product</option>

                                        <?php while($row=mysqli_fetch_array($res2)):;?>
                                            <option type="text" name=pname" value="<?php echo $row['pname'];?>"><?php echo $row['pname'];?></option>
                                        <?php endwhile;?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                            <td>
                                <div class="input-container">
                                    <i class="fa fa-paw icon">
                                    </i>


                                    <select style="width: 100px" name="sname" id="">
                                        <option>sellername</option>

                                        <?php while($row=mysqli_fetch_array($res1)):;?>
                                            <option type="text" name=sname" value="<?php echo $row['sname'];?>"><?php echo $row['sname'];?></option>
                                        <?php endwhile;?>
                                    </select>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="input-container">
                                    <i class="fa fa-paw icon">
                                    </i>

                                    <input style="width: 100px" class="input-field"
                                           type="text"
                                           placeholder="bidamount"
                                           name="bid">

                                </div>
                            </td>
                        </tr>



                    </table>

                    <div class="input-container">
                        <input  type="submit" placeholder="submit"
                                name="submit" class="btn">
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

