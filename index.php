<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Forside</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="newUserContainer">

        <h3>Opret bruger</h3>
        <form action="includes/formhandler.inc.php" method="post">
        <h4>Angiv dit ønskede brugernavn:</h4>
        <input type="text" name="username" placeholder="Brugernavn">
        
        <h4>Vælg et sikkert kodeord:</h4>
        <input type="text" name="pwd" placeholder="Kodeord">
        
        <h4>Indtast din email-adresse:</h4>
        <input type="text" name="email" placeholder="Email">
        
        <h4>Angiv din nummerplade:</h4>
        <input type="text" name="licenseplate" placeholder="Nummerplade nummer">
        
        <h4>Indtast en ekstra nummerplade (valgfrit):</h4>
        <input type="text" name="licenseplateExtra" placeholder="Nummerplade nummer">
        
        <button>Opret</button>
        </form>
    </div>

<script src="/JS/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>
</html>