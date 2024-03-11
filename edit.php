<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </nav>
    <div class="newUserContainer">
        <h3>Opret bruger</h3>
        <form action="includes/userupdate.inc.php" method="post">
            <h4>Angiv dit ønskede brugernavn:</h4>
            <input type="text" name="username" placeholder="Brugernavn">
            <h4>Vælg et sikkert kodeord:</h4>
            <input type="password" name="pwd" placeholder="Kodeord">
            <h4>Indtast din email-adresse:</h4>
            <input type="text" name="email" placeholder="Email">
            <h4>Angiv din nummerplade:</h4>
            <input type="text" name="licenseplate" placeholder="Nummerplade nummer">
            <h4>Indtast en ekstra nummerplade (valgfrit):</h4>
            <input type="text" name="licenseplateExtra" placeholder="Nummerplade nummer">
            <button>Opret</button>
        </form>
    </div>
    <script src="/Eletric-charger-solution/JS/app.js" defer></script>
    <script src="/Eletric-charger-solution/JS/reseveration.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>