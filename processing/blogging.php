<?php

require '../config/database.php';

    $title = $_POST['title'];
    $file_name = basename($_FILES["file"]["name"]);
    $short_description = $_POST['short_description'];
    $long_description = $_POST['long_description'];

    if (isset($title) && isset($short_description)) {
        move_uploaded_file($_FILES['file']['tmp_name'], "../assets/db/files" . $file_name);
        $req = $myPDO->query("INSERT INTO articles(title, short_description, long_description, file_name) VALUES (\"$title\", \"$short_description\", \"$long_description\", \"$file_name\");");
        $req->fetch();
        header("Location: ../");
        exit();
    }