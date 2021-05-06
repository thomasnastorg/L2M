<?php

include_once 'db_connect.php';




if (isset ($_POST["connexion"])){
       

       $res= $dbh -> prepare("select * from utilisateur where usr_login= :usr_login ");
       $res -> execute(['usr_login' => $_POST['usr_login']]);
       $userL = $res -> fetch();
     
     
       if( password_verify($_POST['usr_pass'], $userL->usr_pass) ){
        session_start();
         $_SESSION["auth"]= $userL;
         header("Location: index.php");
         exit;
       }else{
         echo"conection imposible";
       }
       
     
     }
     
     include 'header.php';
     
     
       
         if (isset($_POST["save"])) {
     
                 $usr_nom= isset ($_POST["usr_nom"]) ? $_POST["usr_nom"]:"";
                 $usr_prenom= isset ($_POST["usr_prenom"]) ? $_POST["usr_prenom"]:"";
                 $usr_login= isset ($_POST["usr_login"]) ? $_POST["usr_login"]:"";
                 $usr_pass= password_hash($_POST['usr_pass'], PASSWORD_BCRYPT);
                 $usr_email= isset ($_POST["usr_email"]) ? $_POST["usr_email"]:"";
                 $usr_dep= isset ($_POST["usr_dep"]) ? $_POST["usr_dep"]:"";
                 $usr_ville= isset ($_POST["usr_ville"]) ? $_POST["usr_ville"]:"";
                 $usr_tel= isset ($_POST["usr_tel"]) ? $_POST["usr_tel"]:"";
                 
                 
     
                 $req1 = "insert into utilisateur (usr_nom, usr_prenom, usr_email, usr_login, usr_pass,
                 usr_dep, usr_ville, usr_tel) values ('$usr_nom', '$usr_prenom','$usr_email', '$usr_login', '$usr_pass', '$usr_dep',
                 '$usr_ville', '$usr_tel')";
                 $res1 = $dbh -> query($req1);
     
     }
     ?>
<!-- fin CONEXION -->

<!DOCTYPE html>
<html lang="fr">
<head>
<!--  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="Mettrelogo.png"/>
	<title>M2L : Réservation</title>
  <link rel="stylesheet" href="assets/css/main.css" />
	<meta name="description" content="Site de la M2L.">
	
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->
<!-- Commenté par Marie car le fontawesome utilisé pr le menu est différente de celle ci -->
<!-- Commenté par dololo on supprime du coup ???? ↑↑↑↑↑↑ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	

	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript">
		$(function() {
			$('a[href=#header]').click(function(){
				$('html').animate({scrollTop:0}, 'slow');
				return false;
			});
		});
	</script>

		
</head>
<body>


</div>
</nav>


<section id="main">
					<div class="container">
							<article class="box post">

<!--               
                      <div style="position: static;"> -->
                          
                          <div style="border: 1px solid none;" class="container-fluid" id="pagin_resA">
                            <div aria-label="..." >
                              
                                  <ul class="row pagination pagination-lg">
                                    <li class="page-item active" aria-current="page">
                                      <span class="page-link" onclick="appli()" style="cursor: pointer; ">
                                          Réservation des salles
                                        <span class="sr-only">(current)</span>
                                      </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" onclick="info()" style="cursor: pointer;">Informations relatives aux réservations</a></li>
                                  </ul>
                            </div>
                          </div>


                          <div style="border: 1px solid none; " class="container-fluid" id="pagin_resB">
                            <div aria-label="...">
                              
                                  <ul class="row pagination pagination-lg">
                                      <li class="page-item">
                                        <a class="page-link" onclick="appli()" style="cursor: pointer;">
                                      Réservation des salles
                                          </a>
                                          
                                      </li>
                                    
                                      <li class="page-item active" aria-current="page">
                                          <span class="page-link" onclick="info()" style="cursor: pointer; ">
                                              Informations relatives aux réservations
                                          <span class="sr-only">(current)</span>
                                          </span>
                                      </li>
                                  </ul>
                            </div>
                          </div>



                          <center>         
    <div id="info_reservation" style="margin-bottom: 5%; margin-left: 20% !important; margin-right: 20% !important;">
                <div class="container-fluid">

                <!-- Card de connexion -->

                      <form method="POST">
                              <div class="col-nd">
                                  <div class="container-fluid" style="padding: 5%;">
                                          <div style="padding: 5%; margin-bottom: 10%; box-shadow: 0px 5px 18px grey; border-radius: 10px;">
                                          <div class="text-center">
                                              <h3>CONNEXION</h3> 
                                          </div>
                                                  <div style="padding-top: 2%; padding-bottom: 2%;">
                                                      <label for="email">E-mail</label>
                                                      <input type="email" class="form-control" name="usr_email" 
                                                      placeholder="identifiant@nomdedomaine.fr" required>
                                                      
                                                  </div>
                                                  <div style="padding-top: 2%; padding-bottom: 2%;">
                                                      <label for="mdp">Mot de passe</label>
                                                      <input type="password" class="form-control" name="usr_pass" id="ok" 
                                                      placeholder="********" required>
                                                  
                                                  </div>						
                                                  <div style="padding-top: 2%; padding-bottom: 2%;">
                                                      <input type="submit" class="btn btn-info btn-block" name="btn_cn" value="Connexion">
                                                  
                                                  </div>
                                                      <hr>
                                                      <div class="text-center">
                                                      <h4 class="text-muted">Nouveau sur cette plateforme ?</h4>
                                                          <a href="inscription.php" class="text-center btn btn-light">
                                                          Créer votre compte
                                                          </a>
                                                      </div>
                                          </div>
                                  </div>
                              </div>
                      </form>

              </div>
    </div>

</center>


      <div id="reservation" class="container">
      </br></br> </br>
          <center><h2>RESERVATION DES SALLES</h2> </br>
          <h4>Interview du Directeur Lucien Sapin.</h4> </br> </br><hr></center>

          <center><h4>COMMENT FONCTIONNE LE SYSTÈME DE RÉSERVATION DES SALLES RESSOURCES, COMME LES SALLES DE RÉUNIONS, L’AMPHITHÉÂTRE OU ENCORE LA NOUVELLE SALLE DE CONVIVIALITÉ ?</h4></center>
          </br>
          <p>Concernant l’amphi, il y a ½ journée gratuite par an pour chaque ligue et comité départemental (CD). Les salles de réunions d’étage sont mises librement à la disposition des occupants de l’étage. Les salles de réunions sont réservables via l’Intranet, avec différents services associés dont certains sont payants. Il existe quatre niveaux de tarification. En 2009, nous avons reçu 2732 réunions et 47316 personnes ont assisté à ces réunions.
          </p><hr>

          </br> </br>

          <center><h4>QUELS SONT CES NIVEAUX DE TARIFICATION ?</h4></center>
          </br>
          <p>Les ligues peuvent réserver sans payer jusqu’à concurrence de six réservations par an, hors amphi. Les clubs sportifs et les comités départementaux ont un premier niveau de tarification. Les associations, les lycées ou encore les collèges sont sur un second niveau de tarification. </p>
          <p>Enfin, tous les autres organismes, y compris des sociétés privées, sont sur le niveau de tarification le plus haut. Pour toutes les structures qui ne sont pas hébergées, les locaux étant publics, il faut faire signer entre les parties une « convention d’occupation temporaire ». La réservation se fait dans l’Intranet directement pour les structures hébergées ou par le secrétariat pour une demande extérieure. Les informations sont ensuite transmises au Conseil Régional qui émet un « titre de paiement », c’est-à-dire une facture d’occupation de locaux. Ces titres sont envoyés directement par le Conseil Régional aux utilisateurs.
          </p>

      </div>

      </article>
      </div>
  </section>

      <script type="text/javascript">
        document.getElementById("info_reservation").style.display = "block";
        document.getElementById("pagin_resA").style.display = "block";
        document.getElementById("pagin_resB").style.display = "none";
      document.getElementById("reservation").style.display = "none";

      function info(){	
        document.getElementById("info_reservation").style.display = "none"; 
        document.getElementById("pagin_resB").style.display = "block";
        document.getElementById("pagin_resA").style.display = "none";
        document.getElementById("reservation").style.display = "block";
      }
      function appli(){	
        document.getElementById("info_reservation").style.display = "block";
          document.getElementById("pagin_resA").style.display = "block";
        document.getElementById("pagin_resB").style.display = "none";
        document.getElementById("pagin_resB").style.display = "none";
        document.getElementById("reservation").style.display = "none";
      }
      </script>
      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>

</body>
</html>

<?php
include 'footer.php';
?>
