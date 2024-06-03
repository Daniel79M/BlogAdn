<?php
require('../processing/allArticles.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Articles</title>
</head>
<body>
    <?php 
            require_once '../includes/menu.php';
    ?>
    <a href="/BlogAdn/pages/newBlog.php">Créer un nouvel article</a>

    <h1>Liste des articles</h1>
    <div class="container">
    <?php
        while($data = $request->fetch()){

            ?>
            <hr/>
            <article>
            <img src="../assets/db/files/<?= $data['file_name']?>" alt="<?= $data['file_name'] ?>" width="250px">
            <h3><?= $data['title'] ?></h3>
            <p><?= $data['short_description'] ?></p>            
            <?= $data['long_description'] ?>     
            </article>
            <img src="../assets/db/files/like.png" alt="" width="20px">     <img src="../assets/db/files/comment.png" alt="" width="20px">
                <hr/>
                <br/>
            <?php

    }
    ?>

    </div>
    

</body>
</html>