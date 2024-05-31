<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog du codeur</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="../assets/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
   <?php 
        /*--require_once './includes/menu.php';*/
        include("../includes/menu.php");
   ?>
   <div class="article">
    <form action="../processing/blogging.php" method="POST" enctype="multipart/form-data">

        <label for="title">Saisir le titre de l'article</label>
        <input type="text" name="title" id="title" required>

        <label for="short_description">Saiair une brève descriptionde l'article</label>
        <textarea name="short_description" id="short_description" placeholder="Saisir une brève description...." required></textarea>

        <label for="long_description">Saiair une plus longue descriptionde l'article</label>
        <textarea name="long_description" id="long_description" placeholder="Saisir une plus longue description...." required></textarea>

        <label for="file">Saisir le titre de l'article</label>
        <input type="file" name="file" id="file">

        <button type="submit">Soumettre</button>

        <button type="reset">Annuler</button>

    </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/summernote-0.8.18-dist/summernote-lite.min.js"></script>
   <script>
    $(document).ready(function  (){
        $('#long_description').summernote ({
            heigth: 400,
        })
    });
   </script>
</body>
</html>