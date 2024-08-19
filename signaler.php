<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 10%;
        }
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

h1 {
    color: #333;
}

.categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
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

.category img {
    max-width: 50px;
    margin-bottom: 5px;
}

.category:hover {
    background-color: #e0e0e0;
}

    </style>
</head>
<body>

<h1>Bienvenue sur Found & Object</h1>
<p>Recherchez vos objets perdus ou signalez un objet perdu.</p>

<h2>Recherche d'Objet</h2>
<form method="POST" action="retrouver.php">
    <input type="text" name="search" placeholder="Rechercher..." required>
    <button type="submit" name="submit_recherche">Chercher</button>
</form>


<h2>Signaler un Objet Perdu</h2>
<div class="container">

    <h2>Quand ?</h2>
    <div class="date-selection">
        <button class="date-button active">Aujourd'hui</button>
        <button class="date-button">Hier</button>
        <button class="date-button">Avant-hier</button>
        <input type="datetime-local" class="date-input" value="2024-08-17T06:56">
    </div>

    <h2>Sélectionnez une catégorie *</h2>
    <div class="categories">
        <a href=".php" class="category"><img src="image/images.png" alt="">Retour aux catégories</a>
        <a href="html.php" class="category"><img src="image/popo.jpeg" alt="">Carte d'identité</a>
        <a href="html.php" class="category"><img src="image/pipi.png" alt="">Passeport</a>
        <a href="html.php" class="category"><img src="driver-license-icon.png" alt="Permis de conduire">Permis de conduire</a>
        </div>
    </form>
</div>


</body>
</html>
