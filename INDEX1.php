
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>object</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<div class="wrapper">
  <div class="sidebar">
    <h2>MENU</h2>
    <?php if (isset($_SESSION['nom']) && isset($_SESSION['photo'])): ?>
            <h3> <?= htmlspecialchars($_SESSION['nom']) ?>!</h3>
            <img src="<?= htmlspecialchars($_SESSION['photo']) ?>" alt="Photo de profil" style="width: 140px; height: 140px; border-radius: 58%;">
<?php else: ?>
            <h1>Bienvenue sur notre application!</h1>
        <?php endif; ?>
    <ul>
    <li><a href="#"><i class="fas fa-home"></i>Accueil</a></li>
    <li><a href="#"><i class="fa fa-object-group" aria-hidden="true"></i></i>posté un objet perdu</a></li>
    <li><a href="#"><i class="fas fa-map-pin"></i>Retrouver un objet</a></li>
    <li><a href="#"><i class="fas fa-address-card"></i>À propos</a></li>
    <li><a href="#"><i class="far fa-address-book"></i>Contact</a></li>
    <li><a href="#"><i class="fa fa-cogs"></i>Parametre</a></li>
    <li><a href="#"><i class="far fa-heart"></i>Aide</a></li>
    </ul>
    <div class="soccial">
        <a href="#"><i class="fab  fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab  fa-instagram"></i></a>
    </div>
   </div>
<div class="main_content">
    <div class="header">FOUND OBJECT <span class="dit"></span>
    <form action="deconexion.php" method="POST">
            <div class="btn">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            <input type="submit" value="Se déconnecter">
            </div>
            <p>profil</p>
     </div>
    <div class="info">
        <div><h3>Bienvenue sur notre service de recherche d'objets égarés</h3></div>
        <p>Vous avez perdu votre carte d'identité nationale (CNI) ou votre passeport ? Nous sommes là pour vous aider à les retrouver. 
            <br>Suivez les étapes ci-dessous pour posté un objet perdu ou pour rechercher un objet que vous avez égaré :</p>
            <div class="merci">
                <br> -> posté un objet perdu en remplissant le formulaire en ligne<br>
                <br> -> Consultez régulièrement notre base de données pour voir si votre objet a été retrouvé<br>
                <br> -> Contactez-nous si vous avez des questions ou si vous avez besoin d'aide<br>
                </div>
               
               
                
            
    </div>
    
   
    </form>
</div>
</body>
</html>
