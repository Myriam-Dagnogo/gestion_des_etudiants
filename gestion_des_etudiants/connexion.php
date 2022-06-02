<?php
include "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
        <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light menu ">
  <div class="container-fluid">
    
    
    <div class="collapse navbar-collapse" id="navbarNav" bg-purple>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active ta-left" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Connexionformateur</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<h1 class="m-3"> VEUILLEZ REMPLIR LE FORMULAIRE POUR CONTINUER.</h1>
<div class="FormConnect mt-3">
    <div class="form-saisie ">
        <h1 class="form-text">ENREGISTREMENT</h1>
        <form method="POST" action="traitement.php">
                 <span> Nom</span>
                 <input type="text" name="nom" placeholder="Adresse email ">
                 <span> Prenoms</span>
                 <input type="text" name="prenoms" placeholder="Adresse email ">
                 <span> Mot de passe</span>
                 <input type="password" name="mdp" placeholder="Entrer votre mot de passe ">
                
                 <input type="submit" name="envoyer" class="btnConnect" value="Connexion"  >
                
               
                </form>
         </div>
    </div>
</body>
</body>
</html>