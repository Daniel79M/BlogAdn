<?php
if (isset($_COOKIE['username'])) {
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

    <title>Inscription</title>
</head>

<body>
    <?php
    require_once '../includes/menu.php';
    ?>
    <div class="signin">
        <?php
        if (isset($_GET['email']) && $_GET['email'] == 'error') {
            echo "<h2>Email invalide. veuillez saisir entre 5 et 50 caractères.</h2>";
        }
        if (isset($_GET['password']) && $_GET['password'] == 'error') {
            echo "<h2>Les mots de passe saisis ne concordent pas. Veuillez les verifier</h2>";
        }
        ?>
        <form action="/BlogAdn/processing/authentification.php" method="POST">
            <div class="container">
            <div class="mb-3">
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" class="form-control" required>
            <div>

            <div class="mb-3">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudonyme ici" minlength="5" maxlength="20" class="form-control" required>
            </div>
           
            <div class="mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" class="form-control" required>
            </div>
            
            <div class="mb-3">
            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" class="form-control" required>
            </div>
            
            <div class="col-12">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <button type="reset" class="btn btn-primary">Annulé</button>
            </div>

            <p>Déjà un compte? Connectez-vous en cliquant <a href="/BlogAdn/pages/connexion.php?page=connexion">ici</a></p>
            </div>
            
        </form>
    </div>
</body>

</html>