<?php
    // conexao.
    $serve   = "localhost";
    $usuario = "root";
    $senha   = "";
    $banco   = "bd_cyber_cafe";

    $conn = mysqli_connect($serve, $usuario, $senha, $banco);
     
     // testando se a coneção aconteceu.
    if ( mysqli_connect_errno() ) {
        die("Atenção! Por algum o motivo o banco de dados não está funcionado. <br>
            Por favor, informe o problema ao administrador do sistema.");
    }
?>