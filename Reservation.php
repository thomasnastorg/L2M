<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="public/img/logo_ligue.png"/>
	<title href="http://m2l.nathandfk.fr?m2l=index">M2L</title>
	<meta name="description" content="Site de la M2L.">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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



<div style="position: static;">
<div style="border: 1px solid none; " class="container-fluid" id="pagin_resA">
	<div aria-label="...">
		
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

<div id="info_reservation" style="margin-bottom: 5%;">



<div class="container-fluid">

<!-- Card de connexion -->

<form method="POST">
        <div class="col-nd">
            <div class="container-fluid" style="padding: 5%;">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 col-12" style="margin-bottom: 10%; box-shadow: 0px 5px 18px grey; border-radius: 10px;">
                    <div class="text-center">
                        <h3>CONNEXION</h3> 
                    </div>
                            <div style="padding-top: 2%; padding-bottom: 2%;">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email_connect" 
                                placeholder="identifiant@nomdedomaine.fr" required>
                                
                            </div>
                            <div style="padding-top: 2%; padding-bottom: 2%;">
                                <label for="mdp">Mot de passe</label>
                                <input type="password" class="form-control" name="mdp_connect" id="ok" 
                                placeholder="********" required>
                            
                            </div>						
                            <div style="padding-top: 2%; padding-bottom: 2%;">
                                <input type="submit" class="btn btn-info btn-block" name="btn_cn" value="Connexion">
                            
                            </div>
                                <div>
                                    <a href="http://m2l.nathandfk.fr?m2l=reinit" class="text-center">
                                    Mot de passe oublié ?
                                    </a>
                                </div><hr>
                                <div class="text-center">
                                <h4 class="text-muted">Nouveau sur cette plateforme ?</h4>
                                    <a href="http://m2l.nathandfk.fr?m2l=register" class="text-center btn btn-light">
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
	
<h3>RESERVATION DES SALLES</h3><br><hr>
<h4>Interview du Directeur Lucien Sapin.</h4><hr>

<h4>COMMENT FONCTIONNE LE SYSTÈME DE RÉSERVATION DES SALLES RESSOURCES, COMME LES SALLES DE RÉUNIONS, L’AMPHITHÉÂTRE OU ENCORE LA NOUVELLE SALLE DE CONVIVIALITÉ ?</h4>
<p>Concernant l’amphi, il y a ½ journée gratuite par an pour chaque ligue et comité départemental (CD). Les salles de réunions d’étage sont mises librement à la disposition des occupants de l’étage. Les salles de réunions sont réservables via l’Intranet, avec différents services associés dont certains sont payants. Il existe quatre niveaux de tarification. En 2009, nous avons reçu 2732 réunions et 47316 personnes ont assisté à ces réunions.
</p><hr>



<h4>QUELS SONT CES NIVEAUX DE TARIFICATION ?</h4>
<p>Les ligues peuvent réserver sans payer jusqu’à concurrence de six réservations par an, hors amphi. Les clubs sportifs et les comités départementaux ont un premier niveau de tarification. Les associations, les lycées ou encore les collèges sont sur un second niveau de tarification. </p>
<p>Enfin, tous les autres organismes, y compris des sociétés privées, sont sur le niveau de tarification le plus haut. Pour toutes les structures qui ne sont pas hébergées, les locaux étant publics, il faut faire signer entre les parties une « convention d’occupation temporaire ». La réservation se fait dans l’Intranet directement pour les structures hébergées ou par le secrétariat pour une demande extérieure. Les informations sont ensuite transmises au Conseil Régional qui émet un « titre de paiement », c’est-à-dire une facture d’occupation de locaux. Ces titres sont envoyés directement par le Conseil Régional aux utilisateurs.
</p>




</div>
</div>



Menu pour switch 

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
