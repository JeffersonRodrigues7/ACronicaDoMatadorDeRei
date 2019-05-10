<?php

    require_once("db.class.php");
    $database = new db();
    $conection = $database->getConnection();

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = nl2br($_POST['mensagem']);

    $query = $conection->prepare("INSERT INTO contato(nome, telefone, email, assunto, mensagem) 
                                  VALUES(:NOME, :TELEFONE, :EMAIL, :ASSUNTO, :MENSAGEM) ");

    $query->bindParam(":NOME", $nome);
    $query->bindParam(":TELEFONE", $telefone);
    $query->bindParam(":EMAIL", $email);
    $query->bindParam(":ASSUNTO", $assunto);
    $query->bindParam(":MENSAGEM", $mensagem);

    $query->execute();

    header("Location: ../index.php");
?>