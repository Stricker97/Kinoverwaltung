<?php

session_start();

$sn = "localhost";
$un = "root";
$pw = "";
$db = "kinoverwaltung";
$tn = "users";

$un1 = $_POST["un"];
$pw1 = $_POST["pw"];

$conn = mysqli_connect($sn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from $tn WHERE '$un1' = username";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    if($pw1 == $row["password"]){
      $_SESSION['username'] = $un;
      header("location:loggedin.php");
    }else{
      header("location:logininvalid.php");
    }
  }
} else {
  echo "0 results";
}

$conn->close();