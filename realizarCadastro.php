<?php

require('coneccao.php');

$Pnome = $_POST["PrimeiroNome"];
            
$Snome = $_POST["SegundoNome"];
 
$Pnome = $Pnome.' '.$Snome;

$Email = $_POST["email"];

$cpf = $_POST["cpf"];

$Endereco = $_POST["endereco"];

$Estado = $_POST["cod_estados"];

$cidade = $_POST["cod_cidades"];

$senha = $_POST["senha"];


$sql = "INSERT INTO Usuario (nome,email,senha,perfil) VALUES ('$Pnome','$Email','$senha','Cliente')";

if (mysqli_query($conexao, $sql)) {
   
   
    
    $idUsuario=mysqli_insert_id($conexao); 
    
    $sql = "INSERT INTO Cliente (cpf,Usuario_idUsuario,endereco,cidades_cod_cidades) VALUES ('$cpf','$idUsuario','$Endereco','$cidade')";
    if (mysqli_query($conexao, $sql)) {

         header('Location: cadastrar.php?cadastro=sucesso');

    }

    else {

        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
   
       }

   } 

else {

     echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);

    }


        ?>