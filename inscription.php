<?php
include 'header.php';
?>

<title>M2L : Inscription</title>
  <section id="main">
					<div class="container">

						<!-- Content -->
							<article class="box post">
								
								<header>
                  <center><h2 style="margin-bottom: 50px;">Créer un compte</h2></center>
                
                  <div class="container-fluid">

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

                      <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #d52349;" name="save">Enregistrer</button>
                      </form>
</div>
                </header>
              </article> 
					</div>
	</section>



    
  </body>
</html>
<?php
include 'footer.php';
?>