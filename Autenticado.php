<?php 
session_start();
if($_SESSION['autenticado']=='sim'){
$_SESSION['autenticado']='nao';
$_SESSION['user']='';
    header('Location: index.php?nao');
}
?>