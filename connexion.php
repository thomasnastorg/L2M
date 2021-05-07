<?php
session_start();
$_SESSION['auth'] = "";
include_once 'db_connect.php';

if (isset ($_POST["connexion"])){
       

  $res= $dbh -> prepare("select * from utilisateur where usr_login= :usr_login ");
  $res -> execute(['usr_login' => $_POST['usr_login']]);
  $userL = $res -> fetch();


  if( password_verify($_POST['usr_pass'], $userL->usr_pass) ){
    $_SESSION["auth"]= $userL;
    header("Location: index.php");
    exit;
  }else{
    echo"connection impossible";
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

<title>M2L : Connexion</title>
  <body>

<section id="main">
					<div class="container">

						<!-- Content -->
							<article class="box post">
								
								<header>
                                    <center><h2 style="margin-bottom: 50px;">Se connecter</h2></center>
                
                                    
                                    
                                    <form action="./connexion.php" method="POST" class="form-horizontal">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Login:</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name ="usr_login" placeholder="votre login">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe:</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" name="usr_pass" placeholder="votre mot de passe">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default" name="connexion"  style="background-color: #d52349;">Connexion</button>
                                        <span style="margin-left:20px;">Pas de compte?</span>
                                      <a href="inscription.php"><button type="button" class="btn btn-default" style="background-color: #d52349;">S'inscrire</button></a>
                                      </div>
                                    </div>
                                  </form>
                              </header>
                          </article> 
					</div>
				</section>


  </body>