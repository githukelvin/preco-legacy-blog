<?php
// LOCAL DEVELOPMENT
    $host = '127.0.0.1';

    $db= 'preco-legacy-blog';

     
    $user='root';
    $pass ='';
    $charset= 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{  
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "database found";
      
    } catch(PDOException $e){
         throw new PDOException($e->getMessage());

        // echo "database not found";
    };
    
// C:\xampp7.4\htdocs\preco-legacy-blog\db\connection.php

    include 'crud.php';
    // include 'users.php';
    $crud = new  crud($pdo);
    // $users = new  user($pdo);
    
    // $users->insertuseradmin("admin","password");

?>