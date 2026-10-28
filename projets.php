<?php
$projets = ["Site web", "Application mobile", "Gestion de bibliothèque"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des projets</h1>

    <ul>
        <?php foreach ($projets as $projet): ?>
            <li><?= htmlspecialchars($projet, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php">Accueil</a>
</body>
</html>
