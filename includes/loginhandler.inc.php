<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        // Check if the username and password match a record in the database
        $loginQuery = "SELECT * FROM users WHERE username = :username AND pwd = :pwd";
        $loginStmt = $pdo->prepare($loginQuery);
        $loginStmt->bindParam(":username", $username);
        $loginStmt->bindParam(":pwd", $pwd);
        $loginStmt->execute();

        if ($loginStmt->rowCount() == 1) {
            // User authenticated successfully
            // Redirect to a charger page
            header("Location: /Eletric-charger-solution/charger.php");
            die();
        } else {      
            echo "Invalid username or password. Please try again.";
        }
    } catch (PDOException $e) { 
        die("Query failed: " . $e->getMessage());
    }
} 