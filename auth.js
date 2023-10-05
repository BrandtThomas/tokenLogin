// JavaScript pour vérifier l'authentification
document.addEventListener("DOMContentLoaded", function () {
    const authToken = getCookie("auth_token");
    if (!authToken) {
        // Rediriger vers la page de connexion si le token n'est pas présent
        window.location.href = "login.php";
    }
});

// Fonction pour récupérer la valeur d'un cookie
function getCookie(name) {
    const value = "; " + document.cookie;
    const parts = value.split("; " + name + "=");
    if (parts.length === 2) return parts.pop().split(";").shift();
}
