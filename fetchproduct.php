<html>
<head></head>
<script>
    function apply() {
        alert('success');

    }
</script>
<body  style="background-image: url('image/fish22.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">PRODUCT DETAILS</h2>
<?php
include 'connection.php';

        ?>

        <table align="center" border="1">
            <thead>
            <th style="font-size: 30px; background:#b1dcfb ">Fishname</th>
            <th style="font-size: 30px; background: #b1dcfb">Date</th>
            <th style="font-size: 30px; background: #b1dcfb">Bidamount</th>
            <th style="font-size: 30px; background: #b1dcfb">Image</th>

            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM addproduct';

            $result=$conn->query($sql);

            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td><input style="height: 150px" type='text' id='pname' name='pname' value="<?php echo $row['pname']; ?> "></td>
                    <td><input  style="height: 150px" type='text' id='' name='date' value="<?php echo $row['date']; ?> "></td>
                    <td><input  style="height: 150px" type='text' id='' name='bid' value="<?php echo $row['bidamount']; ?> "></td>
                    <td><img width="150px" height="150px" name='image' src="image/<?php echo $row['image']; ?> "></td>



                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </br>
        <?php

}
?>
</body>
</html>
