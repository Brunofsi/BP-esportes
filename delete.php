<?php

    // Create connection
    $conn = mysqli_connect("localhost", "root", "12345", "bpbanco", 3306);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "DELETE FROM Usuario WHERE idUsuario=10";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario excluido com sucesso!";
    } 
    else {
        echo "Erro ao excluir usuario: " . $conn->error;
    }

    $conn->close();
?>