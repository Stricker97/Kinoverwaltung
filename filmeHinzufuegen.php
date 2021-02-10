<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme Hinzufügen</title>
    <link rel="stylesheet" href="filmeHinzufuegen.css">
    <script src="https://kit.fontawesome.com/e742385434.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="home">
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>
    <h1>Film hinzufügen</h1>
    <form action="conn.php" method="POST">
        <input type="text" placeholder="Film Name">
        <input type="text" placeholder="Länge">
        <input type="text" placeholder="Startzeit">
        <input type="text" placeholder="Endzeit">
        <input type="text" placeholder="Saal">
        <input type="submit" value="Submit">
    </form>
</body>
</html>