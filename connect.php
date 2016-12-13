  <?php
   $myServer = "localhost";
        $myUser = "root";
        $myPass = "123456789";
        $myDB = "camerastore";
        // Create connection
        $conn = new mysqli($myServer, $myUser, $myPass, $myDB);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
  ?>