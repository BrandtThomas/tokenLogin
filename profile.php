<?php
// Vérification de l'authentification (simulée pour cet exemple)
$authToken = $_COOKIE['auth_token'];
$user_id = 123; // ID de l'utilisateur authentifié
$expectedToken = hash('sha256', $user_id . 'secret_key'); // Génération du token attendu

if ($authToken !== $expectedToken) {
    // Token non valide, rediriger vers la page de connexion
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Votre Profil</h1>
    <p>Bienvenue sur votre profil.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
