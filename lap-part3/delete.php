<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url('pic6.png');">

<form action=" " method="POST" >
<h1 text-align="center" style  ="color:black;"><u>Delete User</u></h1><br><br>

<img src="user.png " alt="user" class="imgcontainer"><br>

<label for="Id" name="id" style  ="color:black;"><b>Id:</b> </label><br>
<input type="text" name="Id" placeholder="Enter your Id:"><br><br>

<button type="submit" name = "btndelete"  class="create" style="color:white">Delete</button>
<button type="submit" name = "update"  class ="create" style="background-color:maroon;"> <a  href="http://localhost/lab-5/index.php"style="color:white;">cancel</a></button>


<?php
include_once 'functions.php';
if(isset($_POST['btndelete'])){
    $Id = $_POST['Id'];
    $sql = "DELETE FROM user1,countries,subjects WHERE id = $Id ";
  
    if( createMysqlConnection()->query($sql)){
      echo "delete  successfully!";
    }
    else{
      echo "error" ;
    }
  
  }
?>
</form>
</body>
</html>