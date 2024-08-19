<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <!-- Include jQuery and DataTables CSS/JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#resultsTable').DataTable({
                "lengthMenu": [5, 10, 25, 50, -1], // Options for number of entries to show
                "language": {
                    "lengthMenu": "Afficher _MENU_ entrées",
                    "zeroRecords": "Aucun résultat trouvé",
                    "info": "Affichage de la page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucune entrée disponible",
                    "infoFiltered": "(filtré de _MAX_ entrées totales)",
                    "search": "Rechercher :",
                    "paginate": {
                        "next": "Suivant",
                        "previous": "Précédent"
                    }
                }
            });
        });
    </script>
</head>
<body>

    <h3>Résultats de la recherche :</h3>
    
    <!-- Formulaire de recherche -->
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Rechercher...">
        <input type="submit" name="submit_recherche" value="Rechercher">
    </form>

    <table id="resultsTable" class="display">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Contact</th>
                <th>Texte extrait</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connexion à la base de données
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=webcam', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Traitement de la recherche
                if (isset($_POST['submit_recherche'])) {
                    $searchTerm = $_POST['search'];
                    $query = "SELECT * FROM images WHERE extracted_text LIKE :searchTerm";
                    $stmt = $pdo->prepare($query);
                    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if ($results) {
                        foreach ($results as $row) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['extracted_text']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Aucun résultat trouvé.</td></tr>";
                    }
                } else {
                    // Afficher tous les résultats si aucune recherche n'est effectuée
                    $query = "SELECT * FROM images";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['extracted_text']) . "</td>";
                        echo "</tr>";
                    }
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>

    <a href="inscription.php">S'inscrire ou se connecter</a>
</body>
</html>
