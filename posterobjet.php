<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
       /* Réinitialisation des marges et du padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: Arial, sans-serif;
    outline: none;
}

/* Styles pour le corps de la page */
body {
    display: flex;
    background: #ebe9e9;
    margin: 0;
    z-index: 2;
}

/* Styles pour la barre latérale */
.sidebar {
    position: fixed;
    width: 80px;
    height: 100%;
    background: #4b4276;
    padding: 0 1.7rem;
    transition: all 0.5s linear;
    scrollbar-width: none;
    top: 0;
    left: 0;
    color: #fff;
    overflow: auto;
    z-index: 1;
}

/* Styles pour la barre latérale lorsqu'elle est survolée */
.sidebar:hover {
    width: 290px;
    transition: 0.5s;
}

/* Styles pour le logo */
.logo {
    height: 80px;
    padding: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

/* Styles pour les éléments principaux */
.main {
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}

.main li {
    padding: 1rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}

.main li:hover, .active {
    background: #594f8d;
}

.main a {
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

/* Styles pour le contenu principal */
.main-content {
    position: relative;
    width: calc(100% - 80px); /* Laisse de l'espace pour la sidebar */
    margin-left: 80px; /* Espace pour la sidebar */
    padding: 20px;
    height: 2000px; /* Ajustez selon vos besoins */
    overflow-y: auto;
}

/* Styles pour l'en-tête */
.header-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background: #fff;
    border-radius: 10px;
    padding: 16px 2rem;
    margin-bottom: 1rem;
}

.header-title {
    color: rgba(113, 99, 186, 255);
}

.user-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.search-box {
    background: rgb(237, 237, 237);
    border-radius: 15px;
    color: rgba(113, 99, 186, 255);
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
}

.search-box input {
    background: transparent;
    padding: 10px;
    border: none;
}

.search-box i {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-out;
}

.search-box i:hover {
    transform: scale(1.2);
}

/* Styles pour les tableaux */
.table {
    text-align: center;
    margin-top: 20px;
    text-decoration: underline;
}

th, td {
    text-align: center;
}

table {
    margin: 0 auto;
    width: 100%; /* Ajusté pour s'adapter à la largeur de l'écran */
    max-width: 1000px; /* Limite la largeur maximale */
    margin-top: 20px;
}

/* Styles pour les modales */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 90%; /* Ajusté pour s'adapter à la largeur de l'écran */
    max-width: 600px; /* Limite la largeur maximale */
}

/* Styles pour les boutons et les champs */
.momo {
    width: 100%;
    max-width: 300px;
    height: 45px;
    background: #3c2f83;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    text-align: center;
    margin: 10px auto; /* Centré avec une marge auto */
}

.input-chexbox {
    width: 100%;
    margin: 30px 0;
}

.input-chexbox input {
    width: 100%;
    height: 50px;
    border: 2px solid black;
    border-radius: 40px;
    font-size: 16px;
    color: #000;
    padding: 20px 45px 20px 20px;
}

/* Styles pour la galerie d'images */
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    gap: 10px;
    margin: 20px;
}

.gallery img {
    width: 100%;
    border-radius: 8px;
    cursor: pointer;
}

/* Styles pour les labels et les sélecteurs */
label {
    font-weight: bold;
    color: #333;
    margin-right: 10px;
}

select {
    padding: 10px;
    border: 2px solid #5D3C6D;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    transition: border-color 0.3s;
}

select:focus {
    outline: none;
    border-color: #0056b3;
}

/* Media Queries pour ajuster la mise en page sur les écrans plus petits */
@media (max-width: 768px) {
    .sidebar {
        width: 60px;
    }

    .sidebar:hover {
        width: 250px;
    }

    .main-content {
        margin-left: 60px; /* Réduit l'espace pour la sidebar sur les petits écrans */
    }
}

@media (max-width: 480px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .sidebar:hover {
        width: 100%;
    }

    .main-content {
        margin-left: 0;
        padding: 10px;
    }

    .header-wrapper {
        flex-direction: column;
        align-items: flex-start;
    }

    .user-info {
        margin-top: 10px;
    }
}


    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">
        <img src="images/popo (1).jpg" alt="">
        <?php if (isset($_SESSION['nom']) && isset($_SESSION['photo'])): ?>
            <h3><?= htmlspecialchars($_SESSION['nom']) ?>!</h3>
        <?php endif; ?>
    </div>
    <ul class="main">
        <li class="active"><a href="#"><i class="fas fa-home"></i><span>Accueil</span></a></li>
        <li><a href="#"><i class="fa fa-object-group" aria-hidden="true"></i><span>Posté un objet perdu</span></a></li>
        <li><a href="#"><i class="fas fa-map-pin"></i><span>Retrouver un objet</span></a></li>
        <li><a href="#"><i class="fas fa-address-card"></i><span>À propos</span></a></li>
        <li><a href="#"><i class="far fa-address-book"></i><span>Contact</span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i><span>Paramètre</span></a></li>
        <li><a href="#"><i class="far fa-heart"></i><span>Aide</span></a></li>
        <form action="deconexion.php" method="post">
            <li class="logout"><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i><span>Déconnexion</span></a></li>
        </form>
    </ul>
</div>

<div class="main-content">
    <div class="header-wrapper">
        <div class="header-title">
            <span>Found</span>
            <h2>Object</h2>
        </div>
        <div class="user-info">
            <div class="search-box">
                <i class="fa-solid fa-search" aria-hidden="true"></i>
                <input type="text" placeholder="search">
            </div>
            <img src="<?= htmlspecialchars($_SESSION['photo']) ?>" alt="" style="width: 40px; height: 40px; border-radius: 58%; cursor: pointer;">
        </div>
    </div>

    <h1>Objets postés</h1>
    <?php if (isset($message)): ?>
        <div class="success-message"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
    <br>
    <button type="button" id="openModal" class="momo">Poster un Objet</button>  

    <table id="myTable" border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Contact</th>
                <th>Date & Heure</th>
                <th>Image</th>
                <th>Texte Extrait</th>
            </tr>
        </thead>
        <tbody>
        <?php
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=webcam', 'root', ''); // Connexion à la base de données
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->query("SELECT date, image, extracted_text, nom, prenom, contact FROM images");
            $images = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($images as $index => $image) {
                echo '<tr>';
                echo '<td>' . ($index + 1) . '</td>';
                echo '<td>' . htmlspecialchars($image['nom']) . '</td>';
                echo '<td>' . htmlspecialchars($image['prenom']) . '</td>';
                echo '<td>' . htmlspecialchars($image['contact']) . '</td>';
                echo '<td>' . htmlspecialchars($image['date']) . '</td>';
                echo '<td><img src="image/' . htmlspecialchars($image['image']) . '" alt="Image" style="width:100px; height:auto;"></td>';
                echo '<td>' . htmlspecialchars($image['extracted_text']) . '</td>'; // Affichage du texte extrait
                echo '</tr>';
            }
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
        ?>
        </tbody>
    </table>

    <!-- Modal pour poster un objet -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Poster un Objet</h2>
            <form id="myForm" method="post" action="#" enctype="multipart/form-data">
              <div class="input-chexbox">
                <label for="nom">Nom Complet:</label>
                <input type="text" id="nom" name="nom" required>
                </div>
                <div class="input-chexbox">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="input-chexbox">
                <label for="contact">Contact:</label>
                <input type="" id="contact" name="contact" required>
                </div>
                <div class="input-chexbox">
                <label for="type_objet">Type d'Objet Perdu:</label>
                <select id="type_objet" name="type_objet" required>
                    <option value="CNI">CNI</option>
                    <option value="Passeport">Passeport</option>
                </select>
                </div>
                <div class="body">
                <div class="button-container">
    <button type="button" class="button" onclick="toggleImageImport()">
        <img src="image/galerie-icon.jpeg" alt="Galerie"> <!-- Replace with actual galerie icon -->
    </button>
    <button type="button" class="button" onclick="openGallery()">
        <img src="image/camera-icon.png" alt="Camera"> <!-- Replace with actual camera icon -->
    </button>
</div>


<div id="importImage">
    <label for="image">Importer une Image:</label>
    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)">
    <input type="hidden" id="extractedText" name="extractedText"> <!-- Champ caché pour le texte extrait -->
</div>

<div class="gallery" id="imageGallery"></div>
</div>

<script>
    function toggleImageImport() {
        const importImageDiv = document.getElementById('importImage');
        importImageDiv.style.display = importImageDiv.style.display === 'none' ? 'block' : 'none';
    }

    function previewImage(event) {
        const gallery = document.getElementById('imageGallery');
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Image ajoutée';
            gallery.appendChild(img);
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    function openGallery() {
        // Implement gallery opening logic if needed
    }
</script>

                <button type="submit" class="momo">Soumettre la Déclaration</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.rawgit.com/naptha/tesseract.js/0.2.0/dist/tesseract.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

        // Modal pour poster un objet
        const modal = document.getElementById("modal");
        const btn = document.getElementById("openModal");
        const span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Gérer l'importation d'images
        $('#chooseImage').click(function() {
            $('#importImage').show();
        });

        $('#takePhoto').click(function() {
            // Logique pour prendre une photo avec la webcam
            alert('Fonctionnalité de capture non implémentée.');
        });
    });
    </script>
</div>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'C:\xampp\htdocs\ocr\vendor\autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=webcam', 'root', ''); // Utilisateur: root, Mot de passe: vide
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Traitement du formulaire d'inscription
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $contact = $_POST['contact'];
        $type_objet = $_POST['type_objet'];
        

        if (isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];

            // Déplace le fichier téléchargé dans le dossier images
            $upload_path = "images/" . basename($file_name);
            if (move_uploaded_file($file_tmp, $upload_path)) {
                // Initialise TesseractOCR avec le chemin de l'exécutable
                $ocr = new TesseractOCR($upload_path);
                $ocr->executable('C:\Program Files\Tesseract-OCR\tesseract.exe');

                // Extrait le texte de l'image
                $text = $ocr->run();

                if ($text === false) {
                    echo "<li>Erreur lors de l'extraction du texte de l'image.</li>";
                } else {
                    // Préparer la requête d'insertion
                    $stmt = $pdo->prepare("INSERT INTO images (nom, prenom, contact, type_objet, image, extracted_text) VALUES (:nom, :prenom, :contact, :type_objet, :image, :extracted_text)");
                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':prenom', $prenom);
                    $stmt->bindParam(':contact', $contact);
                    $stmt->bindParam(':type_objet', $type_objet);
                    $stmt->bindParam(':image', $file_name);
                    $stmt->bindParam(':extracted_text', $text); // Utiliser le texte extrait

                    // Exécuter la requête
                    if ($stmt->execute()) {
                    } else {
                        echo "<li>Erreur lors de l'insertion des données.</li>";
                    }
                }
            } else {
                echo "<li>Échec de l'importation de l'image.</li>";
            }
        } else {
            echo "<li>Aucune image téléchargée.</li>";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage(); // Gestion de l'erreur de connexion
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage(); // Gestion des autres erreurs
}
?>

</body>
</html>