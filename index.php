<!DOCTYPE html>
  <html>
  <head>
        <?php
            include 'links.php';
            include 'nav.php';
        ?>
</head>


  <!--  <div class="sortby">
        <h4>Sort By</h4>
      
      <form action="#" method="post">

              <select name="pricesort">
              <option value="lh">Price: Low - High</option>
              <option value="hl">Price: High - Low</option>
              </select>
              <input type="submit" name="submit" value="GO" />
        </form>
      
    </div> -->
    
      



  <body background="images/image.jpg">

  <div class="sortby">
  <a href="index.php"><h5>HOME</h5></a><br>
        <form action="#" method="post">
        <h4>Filter</h4>
        <select name="brandn">
        <option value="a">Select</option>
              <option value="canon">Canon</option>
              <option value="nikon">Nikon</option>
              <option value="sony">Sony</option>
              <option value="gopro">GoPro</option>
              </select>
              <br>
         <h4>Sort</h4>
         <select name="sortn">
         <option value="b">Sort</option>
              <option value="lh">Low - High</option>
              <option value="hl">High - Low</option>
             
              </select>
               <br><br> <input type="submit" name="submit" value="GO" />

        </form>
    </div>

  <div class="container">

      <?php
      include 'connect.php';
      ?>
      <?php


if(isset($_POST['submit'])){
          $selected_val = $_POST['brandn']; 
          $selected_val_sort = $_POST['sortn'];
          }
               
               if($selected_val=='a' && $selected_val_sort=='lh')
                  {
                       $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id 
                    GROUP BY specifications.id order by price"; 
                  }

                  else if ($selected_val=='a' && $selected_val_sort=='hl')
                  {
                       $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id 
                    GROUP BY specifications.id order by price desc"; 
                  }
                  else if($selected_val_sort=='b' && $selected_val=='canon'){
                     $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id "; 
                  }
                  else if($selected_val_sort=='b' && $selected_val=='nikon'){
                     $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id "; 
                  }
                  else if($selected_val_sort=='b' && $selected_val=='sony'){
                     $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id "; 
                  }
                  else if($selected_val_sort=='b' && $selected_val=='gopro'){
                     $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id "; 
                  }
                  else if($selected_val==true && $selected_val_sort=='lh')
                  {
                       $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id order by price"; 
                  }

                  else if($selected_val==true && $selected_val_sort=='hl')
                  {
                       $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id WHERE brandname = '$selected_val'
                    GROUP BY specifications.id order by price desc"; 
                  }
                  else
                    {
                      $query3 = "
                    SELECT specifications.id as id,brandname, model, type, color, price
                    FROM specifications join brand
                    ON specifications.brand_id=brand.id 
                    GROUP BY specifications.id"; 
                  }
                  

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
 
</div>

</body>
</html>






