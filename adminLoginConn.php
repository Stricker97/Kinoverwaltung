<?php

session_start();

$sn = "localhost";
$un = "root";
$pw = "";
$db = "kinoverwaltung";
$tn = "users";

$pw1 = $_POST["pw"];

$conn = mysqli_connect($sn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password from $tn where username = 'admin'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    if($pw1 == $row["password"]){
      $_SESSION["username"] = "admin";
      header("location:adminLoggedin.php");
    }else{
      header("location:adminWrongPw.php");
        }
    }
}

$conn->close();