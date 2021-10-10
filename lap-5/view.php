<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

<form action=" " method="POST" >
<h1 text-align="center" style  ="color:white;"><u>View user</u></h1><br><br>

<img src="user.png " alt="user" class="imgcontainer"><br>
<label for="Id" name="id"><b>Id:</b> </label><br>
<input type="text" name="Id" placeholder="Enter your Id:"><br><br>

<label for="Firstname" name="Firstname"><b>Firstname:</b> </label><br>
<input type="text" name="firstname" placeholder="Enter your firstname:"><br><br>

<label for="Lastname" name="Lastname"><b>Lastname:</b> </label><br>
 <input type="text" name="lastname" placeholder="Enter your lastname:"><br><br>

 <label for="Email" name="Email"><b>Email:</b> </label><br>
 <input type="text" name="email" placeholder="Enter your email:"><br><br>

<label for="Age" name="Age"><b>Age:</b> </label><br>
 <input type="text" name="age" placeholder="Enter your age:"><br><br>

<label for="Address" name="Address"><b>Address:</b></label><br> 
<input type="text" name="address" placeholder="enter address"><br><br>


<button type="submit" name = "btnview"  class="create" style="background-color:green;color:white;">view</button>

<button type="submit" name = "update"  class ="create" style="background-color:blue;color:white;" >update</button>

<button type="submit" name = "delete"  class ="create" style="color:white">Delete</button><br><br>

<?php
include_once 'functions.php';
if(isset($_POST['btnview'])){
   viewdata();
}

if(isset($_POST['update'])){
  $Id = $_POST['Id'];
  $Firstname = $_POST['firstname'];
  $Lastname = $_POST['lastname'];
  $Email = $_POST['email'];
  $Age = $_POST['age'];
  $Address = $_POST['address'];



  $sql = "UPDATE user1 SET firstname='$Firstname',lastname='$Lastname',email='$Email',age='$Age',useraddress='$Address'WHERE id ='$Id'";
  if( createMysqlConnection()->query($sql)){
    echo "update successfully!";
  }
  else{
    echo "error" ;
  }
}



if(isset($_POST['delete'])){
  $Id = $_POST['Id'];
  $sql = "DELETE FROM user1 WHERE id = $Id ";

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