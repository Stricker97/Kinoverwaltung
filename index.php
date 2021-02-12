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
            <form action="loginRegister.php" method="POST">
                <label for="login">Login</label>
                <select name="login" id="login">
                    <option value="kunde">Kunde</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="submit" value="&#10003">
            </form>
        </nav>
    </header>
    <main>
        <p>Welcome to CineLucas</p>
    </main>
</body>
</html>