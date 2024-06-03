<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog du codeur</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="../assets/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <?php 
        /*--require_once './includes/menu.php';*/
        include("../includes/menu.php");
   ?>
   <div class="article">
    <form action="../processing/blogging.php" method="POST" enctype="multipart/form-data">
    <div class="container">

        <div class="mb-3">
        <label for="title">Saisir le titre de l'article</label>
        <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
        <label for="short_description">Saiair une brève descriptionde l'article</label>
        <textarea name="short_description" id="short_description" placeholder="Saisir une brève description...." class="form-control" required></textarea>
        </div>

        <div class="mb-3">
        <label for="long_description">Saiair une plus longue descriptionde l'article</label>
        <textarea name="long_description" id="long_description" placeholder="Saisir une plus longue description...." class="form-control" required></textarea>
        </div>

        <div class="mb-3">
        <label for="file">Selectioner un fichier</label>
        <input type="file" name="file_name" id="file" class="form-control" required>
        </div>

        <div class="col-12">
        <button type="submit" class="btn btn-primary">Soumettre</button>
        
        <button type="reset" class="btn btn-primary">Annuler</button>
        </div>

    </div>
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