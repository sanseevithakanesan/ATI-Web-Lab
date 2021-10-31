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

function  insertUserData($fname,$lname,$email,$age,$useraddress,$gender){
    $conn = createMysqlConnection();
    $sql ="INSERT INTO user1(firstname,lastname,email,age,useraddress,gender)
    VALUES('$fname','$lname','$email','$age','$useraddress','$gender')";


    if($conn -> query($sql)==TRUE){
        echo "Data succesfully inserted</br>";
     
    }else{
        echo "Error:".$conn -> error;
    }
    $conn->close();
   
}

function  insertsubjectData($subname){
    $conn = createMysqlConnection();
    $sql ="INSERT INTO subjects (subjectname)
    VALUES('$subname')";


    if($conn -> query($sql)==TRUE){
        echo "subjectData succesfully inserted</br>";
     
    }else{
        echo "Error:".$conn -> error;
    }
    $conn->close();
   
}

function insertcountriesData($countryname){
    $conn = createMysqlConnection();
    $sql ="INSERT INTO countries (countryname)
    VALUES('$countryname')";

    if($conn->query($sql)==TRUE){
        echo "countryData succesfully inserted</br>";
    }
    else{
        echo "Error:".$conn->error;
    }
}

function Viewdata(){
    $sql = "SELECT * FROM user1,countries,subjects";
    $results  = createMysqlConnection()->query($sql);
    echo "<table  border=1px style =color:white>
    <tr>
    
    <th>user id </th>
    <th> Firstname </th>
    <th> Lastname </th>
    <th> Email </th>
    <th> Age </th>
    <th> Address </th>
    <th> Countries </th>
    <th> Subjects </th>
    <th> Gender</th>
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
        <td> ".$row['subjectname']."</td>
        <td> ".$row['countryname']."</td>
        <td> ".$row['gender']."</td>
        
      </tr>  ";
    }
    echo "</table>";
}

?>