<?php

    include "conexao.php";

    $usuario = $_POST ["txt_usuario"];
    $senha = $_POST ["txt_senha"];

    $sql = mysql_query("select * from tb_cadastrar where USUARIO='$usuario");

    if(mysql_num_rows($sql) > 0){
        echo "<script>";
        echo "alert('Conta já Existe')";
        echo "</script>";
    }else{
        $sql = mysql_query("insert into tb_cadastrar (USUARIO, SENHA) values('$usuario', '$senha')");
        echo "<center>";
        echo "Conta Criada com Sucesso";
        echo "<a href=\"cadastrar.html\">RETORNAR AO CADASTRO </a>";
        echo "</center>";
    }

?>