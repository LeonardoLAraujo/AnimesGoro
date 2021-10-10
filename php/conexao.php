<?php

    $servidor = "127.0.0.1"; //Servidor padrão do USBW
    $usuario = "root"; //Usuário
    $senha = "usbw"; //Senha
    $banco_de_Dados = "animesgoro"; //Nome do Banco de Dados

    mysql_connect($servidor, $usuario, $senha) or die ('Erro ao Conectar com o Servidor');
    mysql_connect($banco_de_Dados) or die ('Erro ao Conectar com o Banco de Dados');
 
?>