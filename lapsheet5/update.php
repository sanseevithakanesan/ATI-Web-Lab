<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <style>
   body{
       background-image:url('pic8.jpg');
       position:center;
       background-size:cover;
      }
    </style>
</head>

<body>
<form action=" " method="POST" >
<h1 text-align="center" style  ="color:white;"><u>update user</u></h1><br><br>

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

<b style="color:white;">Gender:</b><br><input type="radio" name="gender" value="male" >
<label for="html">male</label><br>

<input type="radio" name="gender" value="female">
<label for="html">female</label><br><br>

<label for ="country" > Country: </label>
<select name="country" style="color:black;" id="country">
<option value="srilanka"  style="color:black;" >srilanka</option>
<option value="India"  style="color:black;" >India</option>
<option value="London"  style="color:black;" >London</option>
<option value="canada"  style="color:black;" >canada</option>
<option value="france"  style="color:black;" >france</option>
</select><br><br>

<b style="color:white;">Subjects:<b><br><input type="checkbox" id="maths" name="subject" value="maths">
<label for="Maths">Maths</label><br>

<input type="checkbox" id="science" name="subject" value="science">
<label for="science">science</label><br>

<input type="checkbox" id="english" name="subject" value="english">
<label for="vehicle3"> English</label><br>


<input type="checkbox" id="Ict" name="Ict" value="ict">
<label for="Ict"> Ict </label><br>


<input type="checkbox" id="History" name="History" value="history"> 
<label for="History"> History</label><br><br>


<button type="submit" name = "btnupdate"  class ="create" style="background-color:blue;color:white;" >update</button>
<button type="submit" name = "update"  class ="create" style="background-color:red;"> <a  href="http://localhost/lab-5/index.php"style="color:white;">cancel</a></button>

<?php
include_once "functions.php";
if(isset($_POST['btnupdate'])){
  $Id = $_POST['Id'];
  $Firstname = $_POST['firstname'];
  $Lastname = $_POST['lastname'];
  $Email = $_POST['email'];
  $Age = $_POST['age'];
  $Address = $_POST['address'];
  $Gender = $_POST['gender'];
  $Country = $_POST['country'];
  $Subject =$_POST['subject'];

  $sql = "UPDATE user1,countries,subjects SET firstname='$Firstname',lastname='$Lastname',email='$Email',age='$Age',useraddress='$Address',gender='$Gender',countryname='$Country',subjectname='$Subject' WHERE id ='$Id'";
  if( createMysqlConnection()->query($sql))
  {
    echo "update successfully!";
  }
  else{
    echo "error" ;
  }
}
?>
</form>
</body>
</html>