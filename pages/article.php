<?php
require('../processing/allArticles.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Articles</title>
</head>
<body>
    <?php 
            require_once '../includes/menu.php';
    ?>
    <a href="/BlogAdn/pages/newBlog.php">Créer un nouvel article</a>

    <h1>Liste des articles</h1>
    <?php
        while($data = $request->fetch()){

            ?>
            <article>
            <img src="../assets/db/files/<?= $data['file_name']?>" alt="<?= $data['title'] ?>" width="150px">
            <h3><?= $data['title'] ?></h3>
            <p><?= $data['short_description'] ?></p>            
            <?= $data['long_description'] ?>            
                <hr/>
            </article>
            <?php

    }
    ?>


</body>
</html>