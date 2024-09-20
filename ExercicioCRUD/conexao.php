<?php
    $servidor = "localhost";
    $banco = "bdPw3";
    $usuario = "root";
    $senha = "";

    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>