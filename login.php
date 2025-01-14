
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dummy credentials for demonstration
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'admin@exemple.com' && $password === 'admin123') {
        $_SESSION['user'] = ['name' => 'Admin', 'role' => 'admin'];
        header("Location: ../index.php");
        exit();
    } elseif ($email === 'prof@example.com' && $password === 'prof123') {
        $_SESSION['user'] = ['name' => 'Professeur', 'role' => 'prof'];
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Connexion</h1>
    <form method="post">
        <label>Email :</label>
        <input type="email" name="email" required>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <button type="submit">Se connecter</button>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
</body>
</html>
