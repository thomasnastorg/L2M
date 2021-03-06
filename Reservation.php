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
<header>
<!--  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="Mettrelogo.png"/>
	<title>L2M : Réservation</title>
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="calend.css" />
	<meta name="description" content="Site de la L2M.">
	
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

		
</header>
<body>


</div>
</nav>


<section id="main">
					<div class="container">
							<article class="box post">
                        <header>
                                    <center><a><h2>Réservations</h2></a></center> </br>
                        </header>
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

              <div sid="CALENDRIER">

              <script>
  // fill the month table with column headings
function day_title(day_name) {
    document.write("<div class='c-cal__col'>" + day_name + "</div>");
  }
  // fills the month table with numbers
function fill_table(month, month_length, indexMonth) {
    day = 1;
    // begin the new month table
    document.write("<div class='c-main c-main-" + indexMonth + "'>");
    //document.write("<b>"+month+" "+year+"</b>")

    // column headings
    document.write("<div class='c-cal__row'>");
    day_title("Sun");
    day_title("Mon");
    day_title("Tue");
    day_title("Wed");
    day_title("Thu");
    day_title("Fri");
    day_title("Sat");
    document.write("</div>");

    // pad cells before first day of month
    document.write("<div class='c-cal__row'>");
    for (var i = 1; i < start_day; i++) {
      if (start_day > 7) {
      } else {
        document.write("<div class='c-cal__cel'></div>");
      }
    }

    // fill the first week of days
    for (var i = start_day; i < 8; i++) {
      document.write(
        "<div data-day='2017-" +
          indexMonth +
          "-0" +
          day +
          "'class='c-cal__cel'><p>" +
          day +
          "</p></div>"
      );
      day++;
    }
    document.write("</div>");

    // fill the remaining weeks
    while (day <= month_length) {
      document.write("<div class='c-cal__row'>");
      for (var i = 1; i <= 7 && day <= month_length; i++) {
        if (day >= 1 && day <= 9) {
          document.write(
            "<div data-day='2017-" +
              indexMonth +
              "-0" +
              day +
              "'class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        } else {
          document.write(
            "<div data-day='2017-" +
              indexMonth +
              "-" +
              day +
              "' class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        }
      }
      document.write("</div>");
      // the first day of the next month
      start_day = i;
    }

    document.write("</div>");
  }
</script>
<div id="head">
  <div class="c-wrapper">
    <div class="c-monthyear">
    <div class="c-month">
        <span id="prev" class="prev fa fa-angle-left" aria-hidden="true"></span>
        <div id="c-paginator">
          <span class="c-paginator__month"><h3>Janvier</h3></span>
          <span class="c-paginator__month"><h3>Février</h3></span>
          <span class="c-paginator__month"><h3>Mars</h3></span>
          <span class="c-paginator__month"><h3>Avril</h3></span>
          <span class="c-paginator__month"><h3>Mai</h3></span>
          <span class="c-paginator__month"><h3>Juin</h3></span>
          <span class="c-paginator__month"><h3>Juillet</h3></span>
          <span class="c-paginator__month"><h3>Aout</h3></span>
          <span class="c-paginator__month"><h3>Septembre</h3></span>
          <span class="c-paginator__month"><h3>Octobre</h3></span>
          <span class="c-paginator__month"><h3>Novembre</h3></span>
          <span class="c-paginator__month"><h3>Décembre</h3></span>
        </div>
        <span id="next" class="next fa fa-angle-right" aria-hidden="true"></span>
      </div>
      <span class="c-paginator__year">2022</span>
      <div class="c-sort">
      <a class="o-btn c-today__btn" href="javascript:;">Aujourd'hui</a>
    </div>
    </div>
  </div>
</div>
<div class="c-wrapper">
  <div class="c-calendar">
    <div class="c-calendar__style c-aside">
      <a class="c-add o-btn js-event__add" href="javascript:;"><h4>Réserver <span class="fa fa-plus"></span></h4></a>
      <div class="c-aside__day">
        <span class="c-aside__num"></span> <span class="c-aside__month"></span>
      </div>
      <div class="c-aside__eventList">
      </div>
    </div>
    <div class="c-cal__container c-calendar__style">
      <script>
      
      // CAHNGE the below variable to the CURRENT YEAR
      year = 2022;

      // first day of the week of the new year
      today = new Date("January 1, " + year);
      start_day = today.getDay() + 1;
      fill_table("January", 31, "01");
      fill_table("February", 28, "02");
      fill_table("March", 31, "03");
      fill_table("April", 30, "04");
      fill_table("May", 31, "05");
      fill_table("June", 30, "06");
      fill_table("July", 31, "07");
      fill_table("August", 31, "08");
      fill_table("September", 30, "09");
      fill_table("October", 31, "10");
      fill_table("November", 30, "11");
      fill_table("December", 31, "12");
      </script>
    </div>
  </div>

  <div class="c-event__creator c-calendar__style js-event__creator">
    <a href="javascript:;" class="o-btn js-event__close"><h4>Fermer <span class="fa fa-angle-down"></h4></span></a>
    <form id="addEvent">
      <input class="c-input" placeholder="Votre nom" type="text" name="name">
      <input class="c-input" type="date" name="date">
      <textarea class="c-textarea" placeholder="Notes" name="notes" cols="30" rows="10"></textarea>
      <select class="c-select" name="tags">
          <option value="foot">Terrain de foot</option>
          <option value="basket">Terrain de basket</option>
          <option value="badminton">Terrain de badminton</option>
          <option value="pingpong">Terrain de ping pong</option>
        </select>
    </form>
    <br>
    <a href="javascript:;" class="o-btn js-event__save"><h4>Enregistrer <span class="fa fa-save"></span></h4></a>
  </div>
</div>

              </div>
    </div>

</center>


      <div id="reservation" class="container">
      </br></br> </br>
          <center>
          <h3>Interview du Directeur Lucien Sapin.</h3> </br><hr></center>

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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.core.min.js" ></script>
      <script src="calend.js"></script>
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
