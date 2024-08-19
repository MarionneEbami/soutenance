<?php
session_start(); // Démarrer la session

try {
    $connexion = new PDO('mysql:host=localhost;dbname=zina;charset=utf8;', 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['motdepasse'], $_FILES['photo'])) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $motdepasse = htmlspecialchars($_POST['motdepasse']);

            // Gestion de l'upload de l'image
            $photo = $_FILES['photo'];
            $photoPath = 'uploads/' . basename($photo['name']);

            if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($motdepasse) && !empty($photo['name'])) {
                // Vérifiez si l'email existe déjà
                $testnom = $connexion->prepare("SELECT * FROM utilsateurs WHERE email = ?");
                $testnom->execute([$email]);

                if ($testnom->rowCount() == 0) {
                    // Créez le dossier uploads s'il n'existe pas
                    

                    // Déplace le fichier téléchargé dans le dossier uploads
                    if (move_uploaded_file($photo['tmp_name'], $photoPath)) {
                        // Insérer le nouvel utilisateur
                        $insertion = $connexion->prepare("INSERT INTO utilsateurs(nom, prenom, email, motdepasse, photo) VALUES(?, ?, ?, ?, ?)");
                        $insertion->execute([$nom, $prenom, $email, password_hash($motdepasse, PASSWORD_DEFAULT), $photoPath]);

                        // Enregistrer le nom et le chemin de la photo dans la session
                        $_SESSION['nom'] = $nom;
                        $_SESSION['photo'] = $photoPath;

                        // Redirection vers la page d'accueil
                        header("Location: INDEX.php");
                        exit();
                    } else {
                        $error = "Erreur lors du téléchargement de la photo.";
                    }
                } else {
                    $error = "Cet email existe déjà.";
                }
            } else {
                $error = "Veuillez remplir tous les champs.";
            }
        } else {
            $error = "Veuillez remplir tous les champs.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/conex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inscription</title>
</head>
<body>
    <div class="wrapper">
        <form id="registrationForm" method="POST" enctype="multipart/form-data">
            <h1>Inscription</h1>
            
               
            <div class="input-box">
                <input type="text" name="nom" id="nom" placeholder="Entre votre nom" required>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="input-box">
                <input type="text" name="prenom" id="prenom" placeholder="Entre votre prénom" required>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="Entre votre Email" required>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="input-box">
                <input type="password" name="motdepasse" id="motdepasse" placeholder="Entre votre mot de passe" required>
                <i class="fa fa-eye" id="togglePassword" aria-hidden="true" style="cursor: pointer;"></i>
            </div>
            <div class="input-box">
                <input type="file" name="photo" id="photo" accept="image/*" required>
                <i class="fa fa-image" aria-hidden="true"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Souviens-toi de moi</label>
            </div>
            <button type="submit" class="btn">Soumettre</button>
            <div class="register-link">
                <p>J'ai déjà un compte <a href="insciption.php">Se connecter</a></p>
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
