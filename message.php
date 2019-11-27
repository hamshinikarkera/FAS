<?php
/**
 * Created by PhpStorm.
 * User: CHETANA GOWDA
 * Date: 21-11-2019
 * Time: 11:32
 */include 'connection.php';

session_start();
 if($_POST['status']==="getname_buyer"){
     $sql = "select * from auction where bname='". $_SESSION['buyer_name']."'";
     //echo $sql;
     $result= $conn->query($sql);

     while ($row = $result->fetch_assoc()) {
         if($row['auction_status']==="Y")
             echo "Your Bid is been accepted";
         else if($row['auction_status']==="N") {


             echo "Your Bid is been not accepted Yet";
             break;
         }

     }




 }





///-----------------------check seller---------------------


if($_POST['status']==="getname_seller"){
    $sql = "select * from auction where sname='" .$_SESSION['seller_name'] . "'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {

        if ($row['auction_status'] === "Y") {
            echo "Your  product is been accepted";
            break;

        }
        else if ($row['auction_status'] === "N") {
            echo "Your  procduct is  not accepted Yet";
            break;

        }


    }


}





