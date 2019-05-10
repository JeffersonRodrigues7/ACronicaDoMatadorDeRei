<?php

    class db{

        function getConnection(){
            $dns = 'mysql:host=localhost;dbname=matadorderei;charset=utf8';
            $username = 'root';
            $password = '';

            try{
                $pdo = new PDO($dns, $username, $password);
                return $pdo;
            } catch(PDOException $e){
                echo "Erro: ", $e->getMessage();
            }
        }

    }

?>