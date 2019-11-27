<?php
/**
 * Created by PhpStorm.
 * User: CHETANA GOWDA
 * Date: 19-11-2019
 * Time: 20:15
 */
include 'connection.php';
//$ch=$_REQUEST['data'];
$ch=$_REQUEST['action'];

switch($ch){

    case 'access': $id=$_POST['data'];
        $sql = "UPDATE auction SET auction_status='Y' WHERE id=".$id;
        $conn->query($sql);
        echo "Auction Successful..!";
        break;
}


