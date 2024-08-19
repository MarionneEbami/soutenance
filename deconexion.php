<?php
session_start(); // Démarre la session
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session
header("Location: insciption.php"); // Redirige vers le formulaire de connexion
exit();
?>
