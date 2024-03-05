<!DOCTYPE html>
<html lang="da-dk">

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
</nav>



    <!-- card container  -->
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 ">
                <div class="card">
                    <img src="/Eletric-charger-solution/images/charger-charging-station-svgrepo-com.svg" class="card-img-top" alt="stock image of a charging station">
                    <div class="card-body">
                        <h5 class="card-title">Ladestander 1</h5>
                        <a href="/Eletric-charger-solution/booking.php" class="btn custom-btn" id="charger1">Resever</a>
                        <div class="timeSlots">
                            <button class="timeSlot">08:00-10:00</button>
                            <button class="timeSlot">10:00-12:00</button>
                            <button class="timeSlot">12:00-14:00</button>
                            <button class="timeSlot">14:00-16:00</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="/Eletric-charger-solution/images/charger-charging-station-svgrepo-com.svg" class="card-img-top" alt="Picture of a Person">
                    <div class="card-body">
                        <h5 class="card-title">Ladestander 2</h5>
                        <a href="/Eletric-charger-solution/booking.php" class="btn custom-btn" id="charger2">Resever</a>
                        <div class="timeSlots">
                            <button class="timeSlot">08:00-10:00</button>
                            <button class="timeSlot">10:00-12:00</button>
                            <button class="timeSlot">12:00-14:00</button>
                            <button class="timeSlot">14:00-16:00</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="/Eletric-charger-solution/images/charger-charging-station-svgrepo-com.svg" class="card-img-top" alt="Picture of a Person">
                    <div class="card-body">
                        <h5 class="card-title">Ladestander 3</h5>
                        <a href="/Eletric-charger-solution/booking.php" class="btn custom-btn" id="charger3">Resever</a>
                        <div class="timeSlots">
                            <button class="timeSlot">08:00-10:00</button>
                            <button class="timeSlot">10:00-12:00</button>
                            <button class="timeSlot">12:00-14:00</button>
                            <button class="timeSlot">14:00-16:00</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="/Eletric-charger-solution/images/charger-charging-station-svgrepo-com.svg" class="card-img-top" alt="Picture of a Person">
                    <div class="card-body">
                        <h5 class="card-title">Ladestander 4</h5>
                        <a href="/Eletric-charger-solution/booking.php" class="btn custom-btn" id="charger4">Resever</a>

                        <div class="timeSlots">
                            <button class="timeSlot">08:00-10:00</button>
                            <button class="timeSlot">10:00-12:00</button>
                            <button class="timeSlot">12:00-14:00</button>
                            <button class="timeSlot">14:00-16:00</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/Eletric-charger-solution/JS/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>