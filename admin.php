<?php
require_once('includes/dbh.inc.php');

$query = "SELECT * FROM users";

try {
    $result = $pdo->query($query);

    // Fetch data
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Forside</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar  -->
    <nav class="navbar">
      <div class="navbarContainer">
    
          <a href="/Eletric-charger-solution/charger.php" id="navbarLogo"><i class="bi bi-flower2"></i></i>Firkløverparken</a>
          <div class="navbarToggle" id="mobileMenu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </div>
          <ul class="navbarMenu">
              <li class="navbarItem">
                  <a href="/Eletric-charger-solution/rules.php" class="navbarLinks">
                      Informationer
                    </a>
                </li>
                <li class="navbarItem">
                    <a href="/Eletric-charger-solution/booking.php" class="navbarLinks">
                        Reservering
                    </a>
                </li>
                <li class="navbarItem">
                    <a href="/Eletric-charger-solution/admin.php" class="navbarLinks"><i class="bi bi-shield-lock-fill"></i> Admin</a>
                </li>
              <li class="navbarBtn">
                  <a href="/Eletric-charger-solution/contact.php" class="button">
                      Kontakt
                  </a>
              </li>
          </ul>
      </div>
      <div class="tableContainer">
      <table action="">
    <thead>
        <tr>
            <th>Bruger id</th>
            <th>Bruger navn</th>
            <th>Email</th>
            <th>Reg. nr</th>
            <th>Reg- nr 2</th>
            <th>privilegier</th>
            <th>oprettet</th>
            <th>Rediger</th>
            <th>Slet</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['licenseplate'] ?></td>
                <td><?php echo $row['licenseplateExtra'] ?></td>
                <td><?php echo $row['privilege'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td><a href=""><button class="editBtn">Rediger</button></a></td>
                <td><a href=""><button class="deleteBtn">Slet</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
      </div>

      
  <script src="/JS/app.js" defer></script>
  <script src="/JS/reseveration.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
</body>
</html>