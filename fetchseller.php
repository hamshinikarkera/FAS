<html>
<head></head>


<body style="background-image: url('image/ffff1.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">SELLER DETAILS</h2>
<?php
include 'connection.php';
$a=[];
        ?>

        <table align="center" border="1">
            <thead>
            <th style="font-size: 30px; background:#b1dcfb ">sname</th>
            <th style="font-size: 30px; background: #b1dcfb">passwors</th>
            <th style="font-size: 30px; background: #b1dcfb">email</th>
            <th style="font-size: 30px; background: #b1dcfb">dob</th>
            <th style="font-size: 30px; background: #b1dcfb">phone</th>
            <th style="font-size: 30px; background: #b1dcfb">address</th>
            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM seller';
            $result=$conn->query($sql);
            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><input style="height: 100px" type='text' id='sname' name='sname'
                               value="<?php echo $row['sname']; ?> "></td>
                    <td><input style="height: 100px" type='text' id='' name='pass'
                               value="<?php echo $row['password']; ?> "></td>
                    <td><input style="height: 100px" type='text' id='' name='email'
                               value="<?php echo $row['email']; ?> "></td>
                    <td><input style="height: 100px" type='text' id='' name='dob' value="<?php echo $row['dob']; ?> ">
                    </td>
                    <td><input style="height: 100px" type='text' id='' name='phone'
                               value="<?php echo $row['phone']; ?> "></td>
                    <td><input style="height: 100px" type='text' id='' name='address'
                               value="<?php echo $row['address']; ?> "></td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <br>

        <?php
}
?>
</body>
</html>
