<html>
<head>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<script>
    function apply(id) {
        $.ajax({
            type: "post",
            url: "action.php",
            data: {
                data: id,
                action:"access"
            },
            success: function(response) {
               alert(response);
               window.reload();
            }
        });

    }
</script>
<body  style="background-image:url('image/f122.jpg');background-repeat: no-repeat;background-size: 100%">
<h2 align="center">AUCTION DETAILS</h2>
<?php
include 'connection.php';

        ?>

        <table align="center" border="1">
            <thead>
            <th style="font-size: 30px; background:#b1dcfb ">Bname</th>
            <th style="font-size: 30px; background: #b1dcfb">pname</th>
            <th style="font-size: 30px; background: #b1dcfb">Sname</th>
            <th style="font-size: 30px; background: #b1dcfb">Bidamount</th>
            <th style="font-size: 30px; background: #b1dcfb">State</th>

            </thead>
            <tbody>
            <?php
            $sql='SELECT  * FROM auction';

            $result=$conn->query($sql);


            if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>


                <tr style="background: white">
                    <td><input style="height: 75px" type='text' id='bname' name='bname'
                               value="<?php echo $row['bname']; ?> "></td>
                    <td><input style="height: 75px" type='text' id='pname' name='pname'
                               value="<?php echo $row['pname']; ?> "></td>
                    <td><input style="height: 75px" type='text' id='sname' name='sname'
                               value="<?php echo $row['sname']; ?> "></td>
                    <td><input style="height: 75px ;  overflow-x: scroll" type='text' id='bidamount' name='bidamount'
                               value="<?php echo $row['bid']; ?> "></td>
                    <td bgcolor="#ffdead">
                        <button onclick="apply(<?php echo $row['id']; ?>)">access</button>
                    </td>

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
