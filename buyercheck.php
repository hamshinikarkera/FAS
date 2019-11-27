<?php
include 'connection.php';
session_start();
$query = "select * from buyer";
$result = $conn->query($query);


// output data of each row
while ($row = $result->fetch_assoc()) {



    if ($row["bname"] == $_POST['bname'] | $row['password']== $_POST['pass']) {
        $_SESSION['buyer_name']=$_POST['bname'];


        header("location:buyerhome.html");
    } else {
        echo "failed";

    }
}


$conn->close();




?>
