<?php
include 'connection.php';
session_start();
$query = "select * from seller ";
$result = $conn->query($query);


// output data of each row
while ($row = $result->fetch_assoc()) {



    if ($row["sname"] == $_POST['sname'] | $row['password']== $_POST['pass']) {
        $_SESSION["seller_name"]=$_POST['sname'];

        header("location:sellerhome.html");
    } else {
        echo "failed";

    }
}


$conn->close();




?>
