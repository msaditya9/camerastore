<!DOCTYPE html>
<html>
<head>
        <?php
            include 'links.php';
            include 'nav2.php';
        ?>
</head>
<body background="images/image.jpg">
<div class="container">

<?php

include 'connect.php';

$brand_id = $_GET['idhere'];

$sql = "DELETE FROM specifications WHERE id=$brand_id";

$result = $conn->query($sql);



    if ($conn->query($sql) === TRUE) {
        echo "<h3>Record deleted successfully</h3>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
 ?>

</div>
</body>
</html>
