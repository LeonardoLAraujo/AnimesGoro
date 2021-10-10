<?php

    include 'conexao.php';

    $usuario = $_POST ["txt_usuario"]; 
    $senha = $_POST ["txt_senha"];
    $sql = mysql_query("select * from tb_login  where USUARIO='$usuario' and senha = '$senha'");

    if(mysql_num_rows($sql) > 0){ 
        echo "<script>";
        echo "alert('Conta logada com Sucesso!');";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('Usuário ou Senha Incorretos!!');";
        echo "</script>";
    }
?>