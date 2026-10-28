<?php
$etudiants = ["Ilyasse", "Mohamed", "ilyass"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des étudiants</h1>

    <table>
        <tr><th>Nom</th></tr>
        <?php foreach ($etudiants as $nom): ?>
            <tr>
                <td><?= htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="index.php">Accueil</a>
</body>
</html>