<?php

$conexao = mysqli_connect ("localhost", "root","admin", "bpbanco", 3306);

$Pnome = $_POST["PrimeiroNome"];
            
$Snome = $_POST["SegundoNome"];
 
$Pnome = $Pnome.$Snome;

$Email = $_POST["email"];

$cpf = $_POST["cpf"];

$Endereco = $_POST["endereco"];

$Estado = $_POST["estado"];

$cidade = $_POST["cidade"];

$senha = $_POST["senha"];

print_r($_POST);
$sql = "INSERT INTO Usuario (nome,email,senha,perfil) VALUES ('$Pnome','$Email','$senha','Cliente')";

if (mysqli_query($conexao, $sql)) {
   
    echo "Nova tupla inserida com sucesso!"; 
    
    $idUsuario=mysqli_insert_id($conexao); 

    //$sql = "INSERT INTO Cliente (cpf,Usuario_idUsuario,endereco) VALUES ('$cpf','$idUsuario','$Endereco')";
   } 

else {

     echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);

    }


            /*
            $conexao = mysqli_connect ("localhost", "root","admin", "meusite", 3306);
            
            $Pnome = $_POST["PrimeiroNome"];
            
            $Snome = $_POST["SegundoNome"];
             
            $Email = $_POST["email"];

            $cpf = $_POST["cpf"];
            
            $Endereco = $_POST["endereco"];

            $Estado = $_POST["estado"];
            
            $cidade = $_POST["cidade"];

            $senha = $_POST["senha"];

            $rsClientes= mysqli_query($conexao, "SELECT cpf,senha,PrimeiroNome FROM usuario WHERE '$cpf' = usuario.cpf AND '$senha' = usuario.senha"); 

            if(mysqli_num_rows($rsClientes)){
                echo "Sucesso";
            } else {
                echo "Login deu errado";
            }*/

        ?>