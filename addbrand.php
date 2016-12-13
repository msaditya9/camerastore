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
					$name = $_POST['brand'];

					$sql = "INSERT INTO brand (brandname)
					VALUES ('$name')";

					if ($conn->query($sql) === TRUE) {
					    echo "<h2>Brand added</h2>";
					} 

					else {
					    echo "<h2>Brand Already Exists, View / Add Stocks</h2>";
					}

					$conn->close();

					?>
					<br>
						<?php echo "<h3>Brand name : " . $name . "</h3>" ?>
					<br>
					<a href="adminadd.php"><button class="button next-button"><span>ADD STOCK</span></button></a>

		</div>
	</body>

</html>