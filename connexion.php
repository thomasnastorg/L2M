<?php
include 'db_connect'; 
session_start();
$_SESSION["is_loged"]="false";
$_SESSION["log_nom"]="";
$_SESSION["log_prenom"]="";

    if (isset ($_POST["connexion"])){
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        $req= "select count(*) as nbr, USR_NOM, USR_PRENOM from connexion where login='$login' and mdp='$mdp'";
        $res = $dbh -> query($req);
        $data = $res -> fetch(PDO::FETCH_ASSOC);

    if ($data["nbr"]==1){
        $_SESSION["is_loged"]="true";
        $_SESSION["log_nom"]=$data["USR_NOM"];
        $_SESSION["log_prenom"]=$data["USR_PRENOM"];
        echo "connexion réussie..."; 
        header("Location: index.php");
        exit;

    }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <h1><center>Page de connexion</h1><hr><br>  
  <form action="connexion.php" method="POST"class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Login:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name ="login" placeholder="votre login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="mdp" placeholder="votre mot de passe">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="connexion">Sign in</button>
    </div>
  </div><br><br>
  <div><center>
  Pas de compte?
  <a href="inscription.php"><button type="button" class="btn btn-default">S'inscrire</button></a>
  </div>
</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>