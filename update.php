<?php

    $conn = mysqli_connect("localhost", "root", "12345", "bpbanco", 3306);
 
    if (!$conn) {
        die("Falha na Conexão: " . mysqli_connect_error());
    }

    $sql = "UPDATE usuario SET senha='teste' WHERE idUsuario=11";

    if (mysqli_query($conn, $sql)) {
        echo "Senha Alterada com sucesso!";
    } else {
    echo "Erro ao alterar a senha: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>