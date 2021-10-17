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
<h1 text-align="center" style  ="color:white;"><u>create user</u></h1><br><br>

<img src="user.png " alt="user" class="imgcontainer"><br>

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

<button type="submit" name = "button"  class="create" style="color:white">create</button>

<button type="submit" name = "btnview"  class ="create" style="background-color:green"><a href="http://localhost/lab-5/view.php" style ="color:white">View</a></button>

<?php
include_once 'functions.php';

if(isset($_POST['button'])){
 $Firstname = $_POST['firstname'];
 $Lastname = $_POST['lastname'];
 $Email = $_POST['email'];
 $Age = $_POST['age'];
 $Address = $_POST['address'];
 
if (EmptyCheck($Firstname, $Lastname , $Email, $Age ,$Address )!== false){
         echo "<p style = color:red;>Fill in all fields!</p>";
}
elseif(insertUserData($Firstname, $Lastname , $Email, $Age ,$Address )){
      echo "<p style = color:white;>insert successfully!</p>";
}

}

?>
</form>
</body>
</html>