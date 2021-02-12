<?php
if(isset($_POST['login'])){
    if(!empty($_POST['login'])) {
        $selected = $_POST['login'];
        if($selected == 'admin'){
            header("location:adminLogin.php");
        }
    }
}else{
    echo "no";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/e742385434.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="column" id="column1">
            <header>
            <div class="home">
                <a href="index.php"><i class="fas fa-home"></i></a>
            </div>
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
                <input type="text" name="un" placeholder="Uername">
                <input type="password" name="pw" placeholder="Passwort">
                <input type="password" name="pwc" placeholder="Passwort bestätigen">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>