<?php
include 'header.php';
include 'db_connect.php';
?>
<body>
<title> M2L : Emploi</title>
<style>
    input {
        -webkit-appearance: radio !important;
    }
</style>
<!-- Main -->
<section id="main">
					<div class="container">

						<!-- Content -->
							<article class="box post">
								
								<header>
                                    <center><a><h2>Rechercher une offre</h2></a></center><br><br><br><br>
                                    <form action="#" method="POST">
                                        <div class="row">

                                            <div class="col" style="padding-right: 30px; width: 50%;">
                                                <center>

                                                        <h3><input type="radio" name="Rech" id="Categ" value="1" checked> &nbsp Recherche par catégorie</input></h3>
                                                        <br>
                                                        
                                                        Je recherche
                                                        <br>
                                                        <select name="Type" id="Type">
                                                            <option value="indeterminé">-Veuillez choisir une option-</option>
                                                            <option value="CDI">CDI</option>
                                                            <option value="CDD">CDD</option>
                                                            <option value="stage">Stage</option>
                                                            <option value="alternance">Alternance</option>
                                                        </select>
                                                        <br><br>
                                                        D'une durée
                                                        <br>
                                                        <select name="Temps" id="Temps">
                                                            <option value="indeterminée">-Veuillez choisir une option-</option>
                                                            <option value="de 0 à 2 mois">de 0-2 mois</option>
                                                            <option value="de 2 à 6 mois">de 2-6 mois</option>
                                                            <option value="de plus de 6 mois">de +6 mois</option>
                                                            <option value="indeterminée">Indeterminée</option>
                                                        </select>
                                                        <br><br>
                                                        Dans le domaine
                                                        <br>
                                                        <select name="Domaine" id="Domaine">
                                                            <option value="indeterminé">-Veuillez choisir une option-</option>
                                                            <option value="informatique">Informatique</option>
                                                            <option value="comptabilité">Comptabilité</option>
                                                            <option value="managérial">Managérial</option>
                                                            <option value="autre">Autre</option>
                                                        </select>
                                                </center>
                                            </div>
                                            <div class="col" style="padding-right: 30px; border-left: solid 1px #dddddd; width: 50%">
                                                        <center>
                                                        <h3><input type="radio" name="Rech" id="cle" value="2"> &nbsp Recherche par nom ou référence</input></h3>
                                                        
                                                        <br><br>
                                                        <input type="text" placeholder="Entrez un mot clé" name="mot" id="mot">
                                                        
                                                        </center>                                            
                                            </div>
                                            
                                        </div>
                                        <center>
                                        <input type="submit" value="Rechercher" style="margin-top: 3em;">
                                        </center>
                                    </form>
								</header>
                            </article> 
                            <br>
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
            <td colspan=\"2\"><center><a href=\"Qcmm.php\">Postuler</a></center></td>   
                            
        </tr>
    </tbody>
</table>";

?>
							</article>

					</div>
				</section>

</body>
<?php
include 'footer.php';
?>