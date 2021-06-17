<?php
    session_start();

    if(isset($_SESSION['autenticado'])==false){
    $_SESSION['autenticado']='nao';
    $_SESSION['user']='';
    }
?>
