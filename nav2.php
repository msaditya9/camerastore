<!DOCTYPE html>
<html>
<head>
<?php
            include 'links.php';
        ?>
<style>

body{
  height: 500vh;
}

.title {
  
  font-family:"Gotham Thin";
  font-size:35px;
  color:#FFF;
  text-align:center;  
}



.navbar{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    height: 60px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}

.logo{
  height: 60px;
  position: fixed;
  left: 20px;
  top: 10px;

}

.title{
  width: 100%;
  position: fixed;
  top: 10px;
  text-align: center;
}

.action {
  
  position: fixed;
  height: 60px;
  right: 20px;
  top: 20px;
}
.active {
    padding:10px 50px;
    font-family: 'Exo', sans-serif;
    font-size: 15px;
    color: #FFF;
    background-color: rgba(236,206,6,0.7);
}

</style>
</head>
<body>



    <div class="navbar">
      <div class="logo"><a href="index.php"><img src="images/logo.png"  style="width:40px;height:40px;"></a></div>
      <div class="title">CAMERA STORE</div>
      <div class="action"><a class="active" href="index.php">Home</a></div>
    </div>

</body>
</html>
