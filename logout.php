<?php
// Supprimer le cookie d'authentification
setcookie('auth_token', '', time() - 3600, '/');

// Rediriger vers la page de connexion
header('Location: login.php');
?>
