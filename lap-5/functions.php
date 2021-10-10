<?php

function EmptyCheck($fname,$lname,$email,$age,$address){

    if(empty($fname)||empty($lname)||empty($email)||empty($age)||empty($address)){
        
         $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}
    

function createMysqlConnection(){
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "wpdb";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){

        die("connection failed:".$conn->connect_error);

    }
    else{
    
       return $conn;
    }
   
}


//function  createtable(){
//     $conn = createMysqlConnection();
//     $sql = "CREATE TABLE user(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(20) NOT NULL,
//     lastname  VARCHAR(20) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     age VARCHAR(30) NOT NULL,
//     useraddress VARCHAR(20)NOT NULL 
//         )";

//         if($conn->query($sql)==TRUE){
//             echo "users table created successfully";
//         }else{
//             echo "Erorr:".$conn->error;
//         }
// }


    

function  insertUserData($fname,$lname,$email,$age,$useraddress){
    $conn = createMysqlConnection();
    $sql ="INSERT INTO user1 (firstname,lastname,email,age,useraddress)
    VALUES('$fname','$lname','$email','$age','$useraddress')";


    if($conn -> query($sql)==TRUE){
        echo "Data succesfully inserted</br>";
     
    }else{
        echo "Error:".$conn -> error;
    }
    $conn->close();
   
}




function Viewdata(){
    $sql = "SELECT * FROM user1";
    $results  = createMysqlConnection()->query($sql);
    echo "<table  border=1px style =color:white>
    <tr>
    
    <th>user id </th>
    <th> Firstname </th>
    <th> Lastname </th>
    <th> Email </th>
    <th> Age </th>
    <th> Address </th>
    </tr>
    
    ";

    while ($row = $results -> fetch_assoc()){
        echo "<tr> 
        <td> ".$row['id']."</td>
        <td> ".$row['firstname']."</td>
        <td> ".$row['lastname']."</td>
        <td> ".$row['email']."</td>
        <td> ".$row['age']."</td>
        <td> ".$row['useraddress']."</td>
        
      </tr>  ";
    }
    echo "</table>";
}









 


?>