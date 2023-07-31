<?php

  $host="localhost";
  $username="root";
  $password="";
  $db="univercity";

  $conn=mysqli_connect($host,$username,$password,$db);
  if(!$conn){
    die("Connection failed: ".mysql_connect_error());

  }
  else
  {
    echo "Database Connection!";
  }
  ?>