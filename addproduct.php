
<?php

include 'connection.php';

$pname=$_POST['pname'];
$date=$_POST['date'];
$bidamount=$_POST['bid'];
$image=$_POST['image'];

$status = false;

$sql = "INSERT INTO addproduct(pname,date,bidamount,image)
values('$pname','$date','$bidamount','$image')";

if($conn->query($sql))
{
    header("location: home.php");
}
else
{
    echo 'error';
}
?>