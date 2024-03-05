<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    $licenseplate = $_POST["licenseplate"];
    $licenseplateExtra = $_POST["licenseplateExtra"];

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = ':username',pwd = :pwd, email = email , licenseplate = licenseplate, licenseplateExtra = licenseplateExtra WHERE id =";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":licenseplate", $licenseplate);
        $stmt->bindParam(":licenseplateExtra", $licenseplateExtra);



        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: /Eletric-charger-solution/charger.php"); 

        die();
    } catch (PDOException $e) { 
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: /Eletric-charger-solution/charger.php"); 
}
