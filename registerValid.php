<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="row">
        <header>
            <p>Registrierung wurde erfolgreich abgeschlossen</p>
            <h1 id="h1">Login</h1>
        </header>
        <form action="loginConn.php" method="POST">
            <input type="text" name="un" placeholder="Username">
            <input type="password" name="pw" placeholder="Passwort">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>