<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/Public/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.min.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/login">Connexion</a></li>
            <li><a href="/register">Inscription</a></li>
        </ul>
    </nav>
    <hr>
    <div class="form-container">
        <h2>Inscription</h2>
        <form action="/register" method="POST">
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Nom de famille :</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro" required>

            <label for="civility">Civilité :</label>
            <select id="civility" name="civility" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
    <script>
    const input = document.querySelector("#phone");
    const iti = intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js"
    });
    </script>
</body>
</html>
