<?php
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message = ""; // Initialiser la variable message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $contact = $_POST['contact'];
    $birthdate = $_POST['birthdate'];

    // Handle file upload
    if (isset($_FILES['object-photo']) && $_FILES['object-photo']['error'] == 0) {
        $uploads_dir = 'uploads/';
        $tmp_name = $_FILES['object-photo']['tmp_name'];
        $name = basename($_FILES['object-photo']['name']);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        
        // Connexion à la base de données
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=webcam', 'root', 'votre_mot_de_passe'); // Remplacez par votre mot de passe
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Insertion des données dans la base de données
            $query = "INSERT INTO images (nom, prenom, contact, birthdate, photo) VALUES (:nom, :prenom, :contact, :birthdate, :photo)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':photo', $name);  // Le nom du fichier téléchargé

            if ($stmt->execute()) {
                $message = "Objet enregistré avec succès !"; // Message de confirmation
            } else {
                $message = "Erreur lors de l'enregistrement de l'objet.";
            }
        } catch (PDOException $e) {
            $message = "Erreur de connexion : " . $e->getMessage();
        }
    } else {
        $message = "Erreur lors du téléchargement de la photo.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de sélection</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .date-selection {
            margin-bottom: 20px;
        }
        .date-button {
            margin-right: 10px;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .date-button:hover {
            background-color: #0056b3;
        }
        .categories {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .category {
            text-align: center;
            margin: 10px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 150px;
            background-color: #f9f9f9;
            transition: background-color 0.3s;
        }
        .category.active {
            background-color: #d1e7dd; /* Light green */
        }
        .category img {
            max-width: 50px;
            margin-bottom: 5px;
        }
        .category:hover {
            background-color: #e0e0e0;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input, select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda; /* Light green background */
            color: #155724; /* Dark green text */
            border: 1px solid #c3e6cb; /* Green border */
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Quand ?</h1>
    <div class="date-selection">
        <button class="date-button">Aujourd'hui</button>
        <button class="date-button">Hier</button>
        <button class="date-button">Avant-hier</button>
        <input type="datetime-local" class="date-input" value="2024-08-17T06:56">
    </div>

    <h2>Sélectionnez une catégorie *</h2>
    <div class="categories">
        <a href="INDEX.php" class="category"><img src="image/images.png" alt="Retour aux catégories">Retour aux catégories</a>
        <a href="INDEX.php" class="category active"><img src="image/popo.jpeg" alt="Carte d'identité">Carte d'identité</a>
    </div>

    <h2>Décrivez votre objet</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="object-photo">Photo de l'objet *</label>
        <input type="file" id="object-photo" name="object-photo" accept="image/*" required>
        
        <label for="birthdate">Date de naissance *</label>
        <input type="date" id="birthdate" name="birthdate" required>
        
        <label for="nom">Nom *</label>
        <input type="text" id="nom" name="nom" required>
        
        <label for="prenom">Prénom *</label>
        <input type="text" id="prenom" name="prenom" required>
        
        <label for="contact">Contact (ex : +33 6 12 34 56 78) *</label>
        <input type="text" id="contact" name="contact" pattern="^\+?\d{1,3}[- ]?\d{1,4}[- ]?\d{1,4}[- ]?\d{1,9}$" required title="Format : +33 612345678 ou 0612345678">

        <button type="submit">Soumettre</button>
    </form>

    <?php
    // Afficher le message de confirmation
    if ($message) {
        echo "<div class='message'>$message</div>";
    }
    ?>
</div>

</body>
</html>
