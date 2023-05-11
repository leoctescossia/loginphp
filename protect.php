<?php
    //isset verifica se esta não está logado, neste caso
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['user'])){
        die("Você não esta logado <a href=\"twitter.php\">Entrar</a>");
    }

?>