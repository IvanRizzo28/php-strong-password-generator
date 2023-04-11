<?php
    if (isset($_GET) && intval($_GET['pass']) >= 6){
        include "funzioni.php";
        session_start();
        $_SESSION['password']=getPassword($_GET['pass']);
        header("Location: output.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="get">
            <label for="lunghezza">Lunghezza Password</label>
            <input type="number" name="pass" id="lunghezza" min="6" placeholder="Min = 6">
            <button type="submit">Invia</button>
        </form>
    </div>
</body>
</html>