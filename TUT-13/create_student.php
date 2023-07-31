<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="univercity";

  $conn = mysqli_connect("localhost","root","","univercity");

  
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
  }
  
  if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $id = $_POST['id'];
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  }



  $sql = "INSERT INTO univercity.students(id,username,email,password) 
  VALUES('". $id ."','". $username ."','". $email ."','". $password ."')";

  

  if($conn->query($sql)==TRUE)
  {
    echo "New User created successfully!";

  }


  else{
    echo "Error:" .$sql. "<br>".$conn->error;
  }
   $conn->close();
  
  ?>