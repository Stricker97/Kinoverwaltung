<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="row">
        <header>
            <h1 id="h1">Admin</h1>
        </header>
        <form action="AdminloginConn.php" method="POST">
            <input type="password" name="pw" placeholder="Passwort">
            <input type="submit" value="Submit">
        </form>
        <p>Falsches Passwort</p>
    </div>
</body>
</html>