<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background:url('xyz.jpg');
  position:center;
  background-size:cover;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color:gray;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>

<body>
<form action=" " method="POST" >
<h1 style="color:gray">User Details</h1>
<h3 style="color:gray">Update Delete Records below:</h3>
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="123.png" alt="Avatar" style="width:300px;height:300px;">
</div>

<div class="flip-card-back">
      <h1>View Details</h1> 

      <button type="submit" name = "btnview"  class="create" style="background-color:green;color:white;">view</button>

      <button type="submit" name = "update"  class ="create" style="background-color:blue;"> <a  href="http://localhost/lab-5/update.php"style="color:white;">update</a></button>

      <button type="submit" name = "delete"  class ="create" style="background-color:red;"><a href="http://localhost/lab-5/delete.php" style="color:white;">Delete</a></button><br><br> 
      
      <a  href="http://localhost/lab-5/index.php" style="color:black">Go to Home Page</a>
</div>
</div>
</div><br><br>

<?php
include_once 'functions.php';
if(isset($_POST['btnview'])){
   viewdata();
}

?>
</form>
</body>
</html>