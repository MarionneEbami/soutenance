<?php
session_start();
$error = "";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=zina', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = $_POST['motdepasse'];

    // Requête préparée pour vérifier les identifiants
    $sql = "SELECT * FROM utilsateurs WHERE email=?";
    $stm = $pdo->prepare($sql);
    $stm->execute(array($email));

    if ($stm->rowCount() > 0) {
        $row = $stm->fetch(PDO::FETCH_ASSOC); // Récupérer les données

        // Vérifiez le mot de passe
        if (password_verify($motdepasse, $row['motdepasse'])) {
            $_SESSION['email'] = $email;
            header("Location: INDEX1.php"); // Assurez-vous que le chemin est correct
            exit();
        } else {
            $error = "Adresse mail ou mot de passe incorrecte";
        }
    } else {
        $error = "Adresse mail ou mot de passe incorrecte"; // Message d'erreur si l'utilisateur n'existe pas
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscrip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Connexion</title>
</head>
<body>
    <div class="wrapper">
        <form id="loginForm" method="POST">
            <h1>Connexion</h1>
            <?php if ($error): ?>
                <div style="color: red;"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="Entre votre Email" required>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="input-box">
                <input type="password" name="motdepasse" id="motdepasse" placeholder="Entre votre mot de passe" required>
                <i class="fa fa-eye" id="togglePassword" aria-hidden="true" style="cursor: pointer;"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Souviens-toi de moi</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn">Soumettre</button>
            <div class="register-link">
                <p>Je n'ai pas de compte <a href="connexion.php">S'inscrire</a></p>
            </div>
        </form>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('motdepasse');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
