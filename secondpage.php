
<?php

include 'connect.php';
include 'nav2.php';

//Brewery Query for Related data dropdown
$sql = "SELECT id, brandname FROM brand";
$brand = $conn->query($sql);


//Check if a beer_id was supplied in the URL Query Parameter
if (isset($_GET['idhere'])) {

  $idhere = $_GET['idhere'];

  //Query DB for details on that beer
  $brandsql = "SELECT * FROM specifications where id = $idhere";

  $result =  $conn->query($brandsql)->fetch_assoc();

}

?>
<!DOCTYPE html>
<html>
<head>
      <?php
            include 'links.php';
      ?>
</head>

<body background="images/image.jpg">



   <!--View stock on first page-->
    
    <?php
     include 'connect.php';

        $sql = "SELECT
        brand.id, brandname,
        specifications.brand_id, model, type, color, price
        FROM brand JOIN specifications ON brand.id = specifications.brand_id";
        $result = $conn->query($sql);
    ?>
  

    <div class="container">
        <form action="addbrand.php" method="post" >
            <h2>ADD CAMERA</h2>
            <br>
                <div>
                    <label for="brand"></label>
                        <input type="text" class="name" placeholder="Brand" title="Brand should only contain letters." name="brand" aria-describedby="name-format" required/>
                </div>

                <div >
                    <button class="button first-button" type="submit">NEXT</button>
                    
                </div>
            
        </form>

    </div>

</body>

</html>