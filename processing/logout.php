<?php 
    if(isset($_COOKIE['username'])){
        setcookie('username', $_username, -1,'/');
        setcookie('id', "", -1,"/");
    }
    header('Location: /BlogAdn');

?>