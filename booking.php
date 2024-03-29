<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
</nav>

<div class="formContainer">

        <h2 class="formText">Resever Stander</h2>

        <form id="bookingForm">
        <label for="name">Nummerplade:</label>
        <input type="text" id="licensePlate" name="licensePlate" required>

        <label for="adress">Adresse:</label>
        <input type="adress" id="adress" name="adress" required>

        <label for="time"> Book tid:</label>

        <div class="button-container">
            <button id="button1" class="toggle-button">08:00-10:00</button>
            <button id="button2" class="toggle-button">10:00-12:00</button>
            <button id="button3" class="toggle-button">12:00-14:00</button>
            <button id="button4" class="toggle-button">14:00-16:00</button>
        </div>     

        <div class="reserveBtnContainer">
            <button class="reserveBtn" type="button" onclick="submitForm()">Resever</button>
        </div>    
        </form>

</div>

<script src="/JS/app.js" defer></script>
<script src="/JS/reseveration.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>