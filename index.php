
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: pages/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenue au Système de Gestion</h1>
        <a href="pages/logout.php">Déconnexion</a>
    </header>
    <main>
        <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']['name']); ?>.</p>
        <nav>
            <ul>
                <li><a href="pages/catalog.php">Catalogue</a></li>
                <li><a href="pages/orders.php">Mes Commandes</a></li>
                <li><a href="pages/admin.php">Administration</a></li>
            </ul>
        </nav>
    </main>
</body>
</html>
