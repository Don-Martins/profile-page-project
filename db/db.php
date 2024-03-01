<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "user_profiles";
 

 $conn = new mysqli('localhost' , 'root', '', 'user_profiles');

 if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);
 }else{
    echo ("");
 }


?>