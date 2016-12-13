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

		$brand_id = $_POST['brand_id'];
		$model = $_POST['model'];
		$type = $_POST['type'];
		$color = $_POST['color'];
		$price = $_POST['price'];

		if(isset($_POST['idhere']))
		{
			 $brand_id= $_POST['idhere'];

			 $sql = "UPDATE specifications SET model='$model', type='$type', color='$color', price=$price WHERE id=$brand_id";
		 }
		 else
		 {
			
			$sql = "INSERT INTO specifications (brand_id, model, type, color, price)
			VALUES ('$brand_id', '$model', '$type', '$color', '$price')";
		}

		
		if ($conn->query($sql) === TRUE) {
			    echo "<h2>Camera added </h2><br>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		?>

		<br>
		<h3>MODEL: <?php echo $model ?></h3><br>
		<h3>TYPE: <?php echo $type ?></h3><br>
		<h3>COLOR: <?php echo $color ?></h3><br>
		<h3>PRICE: <?php echo "$".$price ?></h3><br>
		<br>

		
		<a href="adminadd.php"><button class="button next-button"><span>ADD MORE</span></button></a>
		
</div>
</body>
</html>