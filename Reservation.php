<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="public/img/logo_ligue.png"/>
	<title href="http://m2l.nathandfk.fr?m2l=index">M2L</title>
	<meta name="description" content="Site de la M2L.">
	<meta name="author" content="Nathan DFK">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">

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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/filecss.css">
	<script type="text/javascript" src="public/js/filejs.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="public/js/bootstrap.bundle.min.js" charset="utf-8"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/javascript" href="public/js/script.js">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="https://codepen.io/fancyapps/pen/Kxdwjj">
</head>
<body>

																						<a href="http://m2l.nathandfk.fr?m2l=connect" class="btn btn-dark btn-sm" style="color: white;">
											Connexion
										</a>
																
						<a href="http://m2l.nathandfk.fr?m2l=index" style="font-size: 22px; color: white; color: white; text-decoration: none; padding: 1.3% 0% 1.3% 0%; margin: 0% 1.5% 0% 1.5%; font-weight: bold;" 
												class="Ilog topline ligueHover"><strong><i class="fas fa-home"></i></strong></a>

												<a href="javascript:void(0);" class="icon topline ligueHover" style="color: white; text-decoration: none; padding: 1.3% 0% 1.3% 0%; margin: 0% 1.5% 0% 1.5%; font-weight: bold;" onclick="myFunction()" id="openicon">
													<i class="fa fa-bars" style="font-size: 24px;"></i>
												</a>
</div>

</div>
</nav><!-- <ul> -->
<!-- <li style="display: inline;"><input type="text" name="" class="form-control w-50" placeholder="Nom"></li>
<li style="display: inline;"><input type="text" name="" class="form-control w-50" placeholder="Prénom"></li>
</ul> -->
<!-- <input type="email" name="" class="form-control" placeholder="identifiant@nomdedomaine.fr">
<input type="text" name="number" class="form-control" placeholder="06 XX XX XX XX"> -->



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





<div id="info_reservation" style="margin-bottom: 5%;">



<div class="container-fluid">

<div class="text-center">
<h3>Veuillez-vous connecter pour pouvoir réserver une salle</h3>
</div>
<div class="saform col-sm-9 col-md-12 col-12 col-xs-12 col-lg-6">
<div class="text-center">
<h3>Connexion</h3>
</div>
<form method="POST">
<div class="form-row">
	<div class="form-group col-sm-6">
	<label for="email">Email</label>
	<input type="email" class="form-control" placeholder="identifiant@nomdedomaine.fr" name="email_connect" require="require">
	</div>
	<div class="form-group col-sm-6">
	<label for="password">Mot de passe</label>
	<input type="password" class="form-control" placeholder="********" name="mdp_connect" require="require">
	</div>
	<input type="submit" class="btn btn-info btn-block" value="Connexion" title="connexion" name="btn_connectR">
	
</div>
</form>
<div>
	<a href="http://m2l.nathandfk.fr?m2l=mdpOublie">Mot de passe oublié</a>
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






<!--Info rapide 099A-->
<div class="container">
<div class="modal fade" id="Modal099A" role="dialog">

<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">INFORMATION</h3> 
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<arise>

<div class="modal-body">
<p>Vous ne pouvez pas réserver.</p>
<p>La date sélectionnée n'est plus valable.</p>
</div>


</arise>

<div class="modal-footer">
<a href="https://fr.wikipedia.org/wiki/Mod%C3%A9lisme_a%C3%A9rien"> En Savoir Plus</a>      

</div>  

</div>
</div>
</div>
</div>


<!--Info rapide 099B-->
<div class="container">
<div class="modal fade" id="Modal099B" role="dialog">

<div class="modal-dialog modal-lg">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">INFORMATION</h3> 
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<arise>

<div class="modal-body">
<p>Vous pouvez réserver. Cette date est encore valide</p>
<p>Pour réserver veuillez cliquer sur cette icon 
				<img src="public/img/0.png" alt="Action" style="width:18px;"  /></p>
</div>


</arise>


</div>
</div>
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
