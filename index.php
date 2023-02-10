<?php
    session_start();
    include_once("./src/data.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./assets/contacts_profile_account_connection_icon_124666.png">
    <title>Connexion utilisateur</title>
</head>
<body>
    <header>
        <h1>FIDELIO & COMPANY</h1>
    </header>
    <main>
        

        <h2>inscription rapide vottre login & mot de pass</h2>

        <form method="post"> 
            <label>adresse mail:
                <input type="email" name="mail" aria-labelledby="mail"  id="mail" placeholder="Mail Utilisateur" aria-required="true" autofocus>
            </label>
            <label>Mot de pass
                <input type="password" name="psw" aria-labelledby="psw" id="psw" placeholder="Mot de passe" aria-required="true">
            </label>
            <input type="submit" aria-label="Envoyer" value="Envoyer" id="ex">
            <a href="./log.PHP">connecte toi</a>
        </form>
        
        <?php
            //inclusion
            include_once "./src/inscription_user.inc.php";
        ?>

    </main>
    <footer>

    </footer>
    
</body>
</html>