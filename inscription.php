<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container-fluid">
  <h1><center>Création compte</h1><hr>
  <form action="connexion.php" method="POST">
  <div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label>Nom:</label>
    <input type="text" class="form-control" name="usr_nom" placeholder="Votre nom" required>
  </div>
  <div class="form-group">
    <label>Prénom:</label>
    <input type="text" class="form-control" name="usr_prenom" placeholder="Votre prénom"required>
  </div>
  <div class="form-group">
    <label>Login:</label>
    <input type="text" class="form-control" name="usr_login" placeholder="Votre login"required>
  </div>
  <div class="form-group">
    <label>Mot de passe:</label>
    <input type="password" class="form-control" name="usr_pass" placeholder="Votre mot de passe"required>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label>E-mail:</label>
    <input type="email" class="form-control" name="usr_email" placeholder="Votre adresse mail"required>
  </div>
  <div class="form-group">
    <label>Département:</label>
    <input type="number" class="form-control" name="usr_dep" placeholder="Votre département"required >
  </div>
  <div class="form-group">
    <label>Ville:</label>
    <input type="text" class="form-control" name="usr_ville" placeholder="Votre ville"required>
  </div>
  <div class="form-group">
    <label>N° téléphone:</label>
    <input type="number" class="form-control" name="usr_tel" placeholder="Votre numéro téléphone"required>
  </div>
  </div>
  </div><br><br>

  <button type="submit" class="btn btn-primary btn-lg btn-block" name="save">Enregistrer</button>
  </form>
</div><br>

    
  </body>
</html>
<?php
include 'footer.php';
?>