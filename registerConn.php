<?php

$sn = "localhost";
$un = "root";
$pw = "";
$db = "kinoverwaltung";
$tn = "users";

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$un1 = $_POST["un"];
$pw1 = $_POST["pw"];
$pwc = $_POST["pwc"];

$conn = mysqli_connect($sn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from $tn where '$un1' = username";
$result = $conn->query($sql);

$results = TRUE;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
    $results = FALSE;
  }

if($results == FALSE){
  if($pw1 != $pwc){
    header("location:registerInvalid.php");
    die;
    }
    $sql = "INSERT into $tn (firstname, lastname, username, password) values ('$fn', '$ln', '$un1', '$pw1')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location:registerValid.php");
}else{
  header("location:registerInvalidUn.php");
}
$conn->close();