<?php
include 'db_connect.php';
$req = "select * from questions where niveau=0 order by rand() limit  10;";
$res= $dbh -> query($req);
$data = $res ->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>M2L : Emploi</title>

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
    <h1><center>Veuillez répondre à ce questionnaire avant de postuler à l'offre d'emploi</h1><hr>
    <form action="Emploi.php" method="POST"><center>
    <?php
    foreach ($data as $line){
        echo "<h3>".$line['qestion']."<br></h3>";
        $id=$line["idq"];
        $req = "select * from questions where niveau=0 order by rand() limit  10;";
        $res= $dbh -> query($req);
        $data = $res ->fetchAll(PDO::FETCH_ASSOC);
        $req1 = "select * from reponses where idq= $id;";
        $res1= $dbh -> query($req1);
        $data1 = $res1 ->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data1 as $line1){
        $idr = $line1["idr"];
        $idq = $line1["idq"];
        echo "<div class=\"row\">
  
          <div class=\"input-group\">
              <h4><input type=\"radio\" name=$idq>".$line1['libeller']."</h4></div>
        </div>
      </div><br>";
    }
       
    }
    ?>
    <input type="submit" value="Valider">
</form>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>