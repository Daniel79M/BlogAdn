<?php
    if(isset($_COOKIE['username'])){
        header('Location: /BlogAdn');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Connexion</title>
</head>
<body>
    <?php 
            include("../includes/menu.php");
    ?>
    <div class="login">
        <div class="container">
            <form action="/BlogAdn/processing/login.php" method="POST">
                <?php
                    if (isset($_GET['user']) && $_GET['user'] == 'unknown'){
                        echo '<h2> Les identifiants saiasis sont incorrects veuillez les vérifier et reéssayez</h2>';
                    }
                ?>
                    <div class="mb-3">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudonyme ici" minlength="5" maxlength="20" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" class="form-control" required>
                    </div>

                    <div class="col-12">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                    <button type="reset" class="btn btn-primary">Annulé</button>
                    </div>

                    <p>pas encore de compte? Inscrivez-vous en cliquant <a href="/BlogAdn/pages/inscription.php?page=inscription">ici</a></p>
            </form>
        </div>
    </div>
</body>
</html>