<!DOCTYPE html>
  <html>
  <head>
        <?php
            include 'links.php';
        ?>
</head>
  <body background="images/image.jpg">
  <div class="container">

    

<?php
include 'connect.php';
?>


<a href="index.php"><button class="button first-button">HOME</button></a><br><br>
<?php



$query3 = "
SELECT specifications.id as id,brandname, model, type, color, price
FROM specifications join brand
ON specifications.brand_id=brand.id
GROUP BY specifications.id";

$result3 = mysqli_query($conn, $query3);
if($result3->num_rows>0){
  //output data 
  while($row = $result3->fetch_assoc()){
     //echo $row['brandname'].  "|" . $row['model']. "|" . $row['type']. "|" . $row['color']. "|" . $row['price']. 
   // " | <a href=admindelete.php?idhere=" . $row['idhere']  ."> delete</a>" .
    // " | <a href=adminadd.php?idhere=" . $row['idhere']  ."> update</a>" . "<br>";

    echo '<div class="container1">'.
            '<p>'. $row['id']. '</p>'.
            '<h4>'. $row['brandname']. '</h4>'.
            '<p>'. $row['model']. '</p>'.
            '<p>'. $row['type']. '</p>'.
            '<p>'. $row['color']. '</p>'.
            '<p>'. '$'.$row['price']. '</p>'.
            '<a class="delete" href=admindelete.php?idhere="' . $row['id']  .'"> DELETE</a>'.
           '<a class="update" href=adminadd.php?idhere="' . $row['id']  .'"> UPDATE</a>'.
            
          '</div>';
  }
}




?>


<a href="index.php"><button class="button first-button">HOME</button></a><br><br>


 
</div>
</body>
</html>






