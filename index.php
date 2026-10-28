<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISI Student Manager - Accueil</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <header  >
        <h1>Bienvenue dans ISI Student Manage r</h1>

        <nav>
            <a href="index.php">Accueil</a>
            <a href="etudiants.php">Étudiants</a >
            <a href="projets.php">Projets</a >
        </nav>
    </header>

    <main  >
         <h2>Gestion des étudiants et des projets</h2 >
        <p>
             Utilisez le menu pour consulter la liste des etudiants
              et les projets du groupe
        </p>
    </main>

    <footer>
        <p>    &copy; <?= date('Y') ?> ISI Student Manager</p>
    </footer >
    </body>
</html>