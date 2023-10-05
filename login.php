<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Vérification de l'authentification (simulée pour cet exemple)
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "utilisateur" && $password === "motdepasse") {
        // Authentification réussie
        $user_id = 123; // ID de l'utilisateur authentifié
        $token = hash('sha256', $user_id . 'secret_key'); // Génération du token
        setcookie('auth_token', $token, time() + 3600, '/'); // Stockage du token dans un cookie

        // Redirection vers la page d'accueil
        header('Location: index.php');
    } else {
        // Authentification échouée
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
