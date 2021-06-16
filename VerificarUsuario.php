<?php
session_start();
require('coneccao.php');

$email = $_POST['email'];
$senha = $_POST['password'];

$autenticar=false;

$sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();
$sql1 = mysqli_query($conexao, "SELECT * FROM usuario WHERE senha = '{$senha}'") or print mysql_error();

if(mysqli_num_rows($sql)>0 && mysqli_num_rows($sql1)>0) $autenticar=true;

$nome=$sql->fetch_array();

if($autenticar) {
    $_SESSION['autenticado']='sim';
    $_SESSION['user']=$nome['nome'];
    header('Location: login.php?login=sucesso');
}
else{
    $_SESSION['autenticado']='nao';
    header('Location: login.php?login=error');
}

/*
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 
 
    #Recebe o Email Postado
    $emailPostado = $_POST['email'];
    #Conecta banco de dados 
    require('coneccao.php');
    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '{$emailPostado}'") or print mysql_error();
 
    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
    else 
        echo json_encode(array('email' => 'Usuário valido.' )); 
}

if(isset($_POST['password'])){ 
 
    
    $senha = $_POST['password'];
 
    require('coneccao.php');
    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE senha = '{$senha}'") or print mysql_error();
 

    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('senha' => 'Senha existe')); 
    else 
        echo json_encode(array('senha' => 'Senha não existe.' )); 
}*/
?>