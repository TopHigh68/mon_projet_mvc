<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><?= htmlspecialchars($post['title']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>