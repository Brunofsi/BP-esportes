<?php 


session_unset();
$_SESSION['autenticado']='nao';
$_SESSION['user']='';
    header('Location: index.php?nao');

?>