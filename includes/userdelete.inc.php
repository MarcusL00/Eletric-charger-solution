


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    $licenseplate = $_POST["licenseplate"];
    $licenseplateExtra = $_POST["licenseplateExtra"];
    $id = $_POST["id"]; // assuming there is a hidden input field named 'id' containing the user's ID

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email, licenseplate = :licenseplate, licenseplateExtra = :licenseplateExtra WHERE id = :id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":licenseplate", $licenseplate);
        $stmt->bindParam(":licenseplateExtra", $licenseplateExtra);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        // Redirect after successful update
        header("Location: /Eletric-charger-solution/charger.php");
        exit(); // Use exit or die after header to prevent further execution
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    // Redirect if not a POST request
    header("Location: /Eletric-charger-solution/charger.php");
    exit();
}