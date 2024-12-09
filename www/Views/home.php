<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
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
    <div class="container">
        <h1>Bienvenue sur la page d'accueil</h1>
        <?php if (isset($_SESSION['user']['firstname'])): ?>
            <p>Bonjour, <?= htmlspecialchars($_SESSION['user']['firstname']) ?> !</p>
            <a href="/logout" class="btn">Se déconnecter</a>
        <?php else: ?>
            <p>Vous n'êtes pas connecté.</p>
            <a href="/login" class="btn">Connexion</a>
            <a href="/register" class="btn">Inscription</a>
        <?php endif; ?>
    </div>
</body>
</html>
