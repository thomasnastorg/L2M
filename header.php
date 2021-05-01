<!DOCTYPE html>
<html>
<head>
	<title>Ma première page</title>
	<meta charset="utf-8">
	 
	<link href="bs337/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/main.css"/>
	<link rel="stylesheet" href="../assets/css/sidebarCSS.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<link  rel="bs337/stylesheet" type="text/css" href="my_style.css" >
	<div class="area"></div><nav class="main-menu" style="position:fixed; left:0px; top:0px; ">
	</head>   
	<body>
		
	<?php   
	/*if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}*/
	?>
	<ul>
                <li>
                    <a href="./index.php">
                        <i class="fa fa-home fa-2x" style="color: #d52349"></i>
                        <span class="nav-text">
                            Accueil
                        </span>
                    </a>
                  
                </li>
             
                <li class="has-subnav">
                    <a href="./Emploi.php">
                       <i class="fa fa-briefcase fa-2x" style="color: #d52349"></i>
                        <span class="nav-text">
                            Emploi
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="./Reservation.php">
                       <i class="fa fa-table fa-2x" style="color: #d52349"></i>
                        <span class="nav-text">
                            Réservation
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="./Contact.php">
                        <i class="fa fa-envelope fa-2x" style="color: #d52349"></i>
                        <span class="nav-text">
                            Contact
                        </span>
                    </a>
                </li>

				<li class="has-subnav">
                    <a href="./M2L.php">
                        <i class="fa fa-trophy fa-2x" style="color: #d52349"></i>
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
			<?php if (($_SESSION['auth'])): ?>
					<li> <a href="./deconnexion.php">deconnexion</a>
			<?php else: ?>	
				<li> <a href="./connexion.php">s'inscrire</a>  
				<li> <a href="./connexion.php">connexion</a>
			<?php endif; ?>	
			<li> <a href="./deconnexion.php">deconnexion</a>
            </ul>
        </nav>
		</body> 