<?php
    session_start();

    if($_SESSION["username"] != 'admin'){
        header("location:index.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinoverwaltung</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e742385434.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="home">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
        <nav>
            <a href="filmeHinzufuegen.php">Film Hinzufügen</a>
            <a href="filme.php">Filme</a>
            <a href="adminReservation.php">Reservation</a>
        </nav>
    </header>
    <main>
        <p>Admin</p>
    </main>
</body>
</html>