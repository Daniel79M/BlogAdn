<?php

require '../config/database.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmation = $_POST['confirmation'];
$hashed_password = md5($password);

if (strlen($email) < 5 || strlen($email) > 50) {
    header('Location: /BlogAdn/pages/inscription.php?page=inscription&email=error');
    exit();
}
if ($password != $confirmation) {
    header('Location: /BlogAdn/pages/inscription.php?page=inscription&password=error');
    exit();
}

$req = $myPDO->query("INSERT INTO users(email, username, password) VALUES('$email', '$username', '$hashed_password');");
$req->fetch(); 
header('Location: /BlogAdn/pages/connexion.php?page=connexion');
