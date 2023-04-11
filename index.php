<?php
    if (isset($_GET) && intval($_GET['pass']) >= 6){
        $stringa="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $pass="";
        for($i=0;$i<$_GET['pass'];$i++){
            $tmp=rand(0,strlen($stringa) - 1);
            $pass.=$stringa[$tmp];
        }
        echo $pass; 
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