<?php   
	
	
		session_start();
		
	

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 
	<link href="bs337/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css"/>
	<link rel="stylesheet" href="assets/css/sidebarCSS.css"/>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<link  rel="bs337/stylesheet" type="text/css" href="my_style.css" >
	
	</head>   
	<body>
		


<div class="area"></div><nav class="main-menu" style="position:fixed; left:0px; top:0px; ">

	<ul>
                <li>
                    <a href="./index.php">
                        <i class="fa fa-home fa-2x" style="color: #d52349; font-size: 20px;"></i>
                        <span class="nav-text">
                            Accueil
                        </span>
                    </a>
                  
                </li>
             
                <li class="has-subnav">
                    <a href="./Emploi.php">
                       <i class="fa fa-briefcase fa-2x" style="color: #d52349; font-size: 20px;"></i>
                        <span class="nav-text">
                            Emploi
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="./Reservation.php">
                       <i class="fa fa-table fa-2x" style="color: #d52349; font-size: 20px;"></i>
                        <span class="nav-text">
                            Réservation
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="./Contact.php">
                        <i class="fa fa-envelope fa-2x" style="color: #d52349; font-size: 20px;"></i>
                        <span class="nav-text">
                            Contact
                        </span>
                    </a>
                </li>

				<li class="has-subnav">
                    <a href="./M2L.php">
                        <i class="fa fa-trophy fa-2x" style="color: #d52349; font-size: 20px;"></i>
                        <span class="nav-text">
                            M2L
                        </span>
                    </a>
                    
                </li>

						<li class="has-subnav">
							<a href="./statutJuridique.php">
								<i class="fa fa-2x"></i>
								<span class="nav-text">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statut Juridique
								</span>
							</a>
							
						</li>
						<li class="has-subnav">
							<a href="./Locaux.php">
								<i class="fa fa-2x"></i>
								<span class="nav-text">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locaux
								</span>
							</a>
							
						</li>
						<li class="has-subnav">
							<a href="./Personnels.php">
								<i class="fa fa-2x"></i>
								<span class="nav-text">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personnel
								</span>
							</a>
							
						</li>
						<li class="has-subnav">
							<a href="./Matériel.php">
								<i class="fa fa-2x"></i>
								<span class="nav-text">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matériel
								</span>
							</a>
							
						</li>
						<li class="has-subnav">
							<a href="./Services.php">
								<i class="fa fa-2x"></i>
								<span class="nav-text">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services
								</span>
							</a>
							
						</li>
            </ul>

            <ul class="logout">
			<?php if ($_SESSION['auth'] != ""){
					echo '<li class="has-subnav">
							<a href="./inscription.php">
								<i class="fa fa-sign-out fa-2x" style="color: #d52349; font-size: 20px;"></i>
								<span class="nav-text">
									Inscription
								</span>
							</a>
						</li>';
			}else{	
				echo '<li class="has-subnav">
						<a href="./inscription.php">
							<i class="fa fa-lock fa-2x" style="color: #d52349; font-size: 20px;"></i>
							<span class="nav-text">
								Inscription
							</span>
						</a>
					</li>';
				echo '<li class="has-subnav">
						<a href="./connexion.php">
							<i class="fa fa-sign-in fa-2x" style="color: #d52349; font-size: 20px;"></i>
							<span class="nav-text">
								Connexion
							</span>
						</a>
					</li>';
			}
			  ?>
			  
				
            </ul>
        </nav>
				<section id="banner" style="margin-top: -6em;">
							<header>
								<h2>ML2</h2>
								<p>Bienvenue sur le site de la Maison des Ligues de Lorraine !</p>
							</header>
				</section>

				<div>
					<a href="index.php"><img src="images\logo2.png" style="position:fixed; right:2em; top:2em; width: 5em; z-index: 1;"></a>
				</div>
</body> 