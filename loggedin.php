<?php
session_start();
//$_SESSION["username"] = "lucas";
//if(isset($_SESSION["uname"])){
    //echo "Your session is running " . $_SESSION["uname"];
    print_r($_SESSION);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinoverwaltung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="filme.php">Filme</a>
            <a href="reservation.php">Reservieren</a>
        </nav>
    </header>
    <main>
        <p>Welcome to CineLucas</p>
    </main>
</body>
</html>