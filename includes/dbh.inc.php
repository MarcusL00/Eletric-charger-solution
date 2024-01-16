<?php

$dsn = "mysql:host=localhost;dbname=evchargerdb";
$dbusername= "root";
$dbpassword= "";

try{
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)

}catch(PDOExpection $e){
    echo "Connection failed: " . $e->getMessage();
}