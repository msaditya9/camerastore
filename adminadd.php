
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

  $result2 =  $conn->query($brandsql)->fetch_assoc();

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
    

<?php
// include 'connect.php';

$sql = "SELECT id, brandname FROM brand";
$result = $conn->query($sql);
?>

<div class="container">
  <form action="adddetails.php" method="post">
        <h2>Add/Update Stock</h2><br>
           <?php if(isset($idhere)) echo "<input type='hidden' name='idhere' value=" . $idhere ." >"; ?> 
      
            <div>
            <center>
            <table>
            <tr>
                    <th><label for="name"><h3>Brand:</h3></label></th>
                    <th><select name="brand_id">
                          <?php
                          if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                  echo "<option value='" . $row["id"]. "'";
                                  if (isset($result2) and  $result2['brand_id'] == $row["id"]) echo "selected";
                                  echo ">" . $row["brandname"] .  "</option>";
                              }
                          }

                          ?>
                        </select>
                        </th>
            
            </tr>
            </table>
            </center>
            </div>
            <br>
                <div>
                  <label for="model"></label>
                  <input type="text" name="model" placeholder="Camera Model" required class="form-control" <?php if (isset($result2['model'])) echo "value='" . $result2['model'] . "'"; ?> />
                </div>
                <div>
                  <label for="type"></label>
                  <input type="text" name="type" placeholder="Type" aria-describedby="name-format" required class="form-control" <?php if (isset($result2['type'])) echo "value='" . $result2['type'] . "'"; ?> />
                </div>
                <div>
                  <label for="color"></label>
                  <input type="text" name="color" placeholder="Color" aria-describedby="name-format" required class="form-control" <?php if (isset($result2['color'])) echo "value='" . $result2['color'] . "'"; ?> />
                </div>
                <div>
                  <label for="price"></label>
                  <input type="text" name="price" placeholder="Price" aria-describedby="name-format" required class="form-control" <?php if (isset($result2['price'])) echo "value='" . $result2['price'] . "'"; ?> />
                </div>

              <div class="button">
                  <button class="button first-button" type="submit">SUBMIT</button>
              </div>
            
        </form>
</div>

  

  </body>
</html>