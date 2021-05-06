<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><center>Liste des questions où vous avez une erreur</center></h1>
</body>
</html>
<?php
$cmpt=0;
include 'db_connect.php';
if (isset($_POST["save"])){
     $res= $_POST["rep"];
   
foreach($res as $line){
$req = "select * from reponses where idr= $line;";
$res= $dbh -> query($req);
$data = $res ->fetch(PDO::FETCH_ASSOC); 
$cor=$data["idq"];

if ($data["verite"]==0){
    $req1 = "select * from  questions where idq= $cor;";
    $res1= $dbh -> query($req1);
    $data1= $res1 ->fetch(PDO::FETCH_ASSOC);
    $cor1=$data1["idq"];
    echo "<h3>".$data1['libelleQ']."<br></h3>";
    $req2 = "select * from  reponses where idq= $cor1 and verite=1;";
    $res2= $dbh -> query($req2);
    $data2= $res2 ->fetch(PDO::FETCH_ASSOC);
    echo "Il fallait répondre: ".$data2['libeller']."<br>";
  
}else $cmpt++;

    
  }
}
  
  ?>
<h1><center>Votre score finale est: <?php echo $cmpt?>/10</h1>