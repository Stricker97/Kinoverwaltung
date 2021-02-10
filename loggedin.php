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
            <a href="filmeHinzufuegen.php">Film Hinzufügen</a>
            <a href="filme.php">Filme</a>
            <a href="reservation.php">Reservieren</a>
            <form action="loginRegister.php" method="POST">
                <label for="login">Login</label>
                <select name="login" id="login">
                    <option value="kunde">Kunde</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="submit" value="Submit">
            </form>
        </nav>
    </header>
    <main>
        <p>Erfolgreich eingeloggt</p>
        <p>Welcome to CineLucas</p>
    </main>
</body>
</html>