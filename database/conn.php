<?php

//using a Mamp server

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "students";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE student_details(
  S_No INT NOT NULL AUTO_INCREMENT , 
  Reg_No VARCHAR(30) NOT NULL PRIMARY KEY,
  S_Name VARCHAR(30) NOT NULL,
  Sub1 VARCHAR(30) NOT NULL,
  Sub2 VARCHAR(30) NOT NULL,
  Sub3 VARCHAR(30) NOT NULL,
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";


$sql_2 = "CREATE TABLE creds( 
  Reg_No VARCHAR(30) NOT NULL PRIMARY KEY,
  S_Name VARCHAR(60) NOT NULL,
  Email VARCHAR(60) NOT NULL,
  Pass VARCHAR(30) NOT NULL,
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$conn->query($sql);
$conn->query($sql_2);
