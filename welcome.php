
<?php

include 'connection.php';

$bname=$_POST['bname'];
$pname=$_POST['pname'];
$sname=$_POST['sname'];
$bid=$_POST['bid'];


$status = false;

$sql = "INSERT INTO auction(bname,pname,sname,bid)
values('$bname','$pname','$sname','$bid')";

if($conn->query($sql))
{
    header('success');
}
else
{
    echo 'error';

}



?>