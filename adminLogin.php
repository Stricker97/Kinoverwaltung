<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/e742385434.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <header>
            <div class="home">
                <a href="index.php"><i class="fas fa-home"></i></a>
            </div>
            <h1 id="h1"><p>Admin</p></h1>
        </header>
        <form action="adminloginConn.php" method="POST">
            <input type="password" name="pw" placeholder="Passwort">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>