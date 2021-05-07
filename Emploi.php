<?php
include 'header.php';
include 'db_connect.php';
?>
<body>
<title>M2L : Emploi</title>
<!-- Main -->
<section id="main">
					<div class="container">

						<!-- Content -->
							<article class="box post">
								
								<header>
                                    <center><h2>Rechercher une offre</h2></center><br><br>
                
                                    
                                    <center><form action="#" method="POST">
                                    <!-- input 1 -->
                                    <input type="radio" name="Rech" id="Categ" value="1" checked>Recherche par catégorie</input>
                                    <!-- plus input 1 -->
                                    <br><br>
                                    Je recherche
                                    <br><br>
                                    <select name="Type" id="Type">
                                        <option value="indeterminé">-Veuillez choisir une option-</option>
                                        <option value="CDI">CDI</option>
                                        <option value="CDD">CDD</option>
                                        <option value="stage">Stage</option>
                                        <option value="alternance">Alternance</option>
                                    </select>
                                    <br><br>
                                    D'une durée
                                    <br><br>
                                    <select name="Temps" id="Temps">
                                        <option value="indeterminée">-Veuillez choisir une option-</option>
                                        <option value="de 0 à 2 mois">de 0-2 mois</option>
                                        <option value="de 2 à 6 mois">de 2-6 mois</option>
                                        <option value="de plus de 6 mois">de +6 mois</option>
                                        <option value="indeterminée">Indeterminée</option>
                                    </select>
                                    <br><br>
                                    Dans le domaine
                                    <br><br>
                                    <select name="Domaine" id="Domaine">
                                        <option value="indeterminé">-Veuillez choisir une option-</option>
                                        <option value="informatique">Informatique</option>
                                        <option value="comptabilité">Comptabilité</option>
                                        <option value="managérial">Managérial</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                    <br><br><br><br>
                                    <!-- input 2 -->
                                    <input type="radio" name="Rech" id="cle" value="2">Recherche par nom ou référence</input>
                                    <!-- plus input 2 -->
                                    <br><br>
                                    <input type="text" placeholder="Entrez un mot clé" name="mot" id="mot">
                                    <br><br><br><br>
                                    <input type="submit" value="Rechercher">
                                    </form></center>
								</header>
                                </article> 
                                <article class="box post">
                                    <center><h2>Résultats<h2></center>
<?php
$Rech=$_POST["Rech"];
if(isset($Rech)){
if($Rech =="2") {
    $mot=$_POST["mot"];
    echo "Vous recherchez : $mot.";
}else if($Rech == "1"){
    $Type=$_POST["Type"];
    $Temps=$_POST["Temps"];
    $Domaine=$_POST["Domaine"];
    echo "Vous recherchez un(e) $Type d'une durée $Temps dans le domaine $Domaine.";
}
}

echo"<table border=\" 1 \">
    <thead>
        <tr>
            <th colspan=\"2\">Développeur web PHP (H/F)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><center>Ville<center></td>
            <td><center>Ambacourt<center></td>
        </tr>
        <tr>
            <td><center>Département<center></td>
            <td><center>Vosges(88)<center></td>
        </tr>
        <tr>
            <td><center>Entreprise<center></td>
            <td><center>Via Mobilis<center></td>
        </tr>
        <tr>
            <td colspan=\"2\"><center><a href=\"https://fr.indeed.com/emplois?q=Commercial%20Sport&l=Lorraine&vjk=2fc5378d40e81df5\">Postuler</a></center></td>
        </tr>
    </tbody>
</table>";

$req="SELECT * FROM emploi";
print(mysql_query($req));

?>
							</article>

					</div>
				</section>

</body>
<?php
include 'footer.php';
?>