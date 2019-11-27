
<?php

include 'connection.php';

$sname=$_POST['sname'];
$password=$_POST['pass'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$adress=$_POST['address'];


$status = false;

$sql = "INSERT INTO seller(sname,password,email,dob,phone,address)
values('$sname','$password','$email','$dob','$phone','$adress')";

if($conn->query($sql))
{
    header('success');
}
else
{
    echo 'error';

}



?>