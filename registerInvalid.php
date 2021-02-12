<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="row">
        <div class="column" id="column1">
            <header>
                <h1>Login</h1>
            </header>
            <form action="loginConn.php" method="POST">
                <input type="text" name="un" placeholder="Username">
                <input type="password" name="pw" placeholder="Passwort">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="column">
            <header>
                <h1>Registrieren</h1>
            </header>
            <form action="registerConn.php" method="POST">
                <input type="text" name="fn" placeholder="Vorname">
                <input type="text" name="ln" placeholder="Nachname">
                <input type="text" name="un" placeholder="Username">
                <input type="password" name="pw" placeholder="Passwort">
                <input type="password" name="pwc" placeholder="Passwort bestätigen">
                <input type="submit" value="Submit">
                <p>Passwörter stimmen nicht überein</p>
            </form>
        </div>
    </div>
</body>
</html>