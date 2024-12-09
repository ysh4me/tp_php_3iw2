<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/Public/style.css">
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
        <h2>Connexion</h2>
        <form action="/login" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous ici</a>.</p>
    </div>
</body>
</html>
