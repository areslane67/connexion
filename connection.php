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
        <?php
        session_start();
        echo "<h2>Bonjour " . $_SESSION['mail']."</h2>";
        ?>
    </main>
  

    <footer>

    </footer>
    
</body>
</html>