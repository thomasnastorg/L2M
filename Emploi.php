<body>

<center><h1>Rechercher une offre</h1></center>

<center><form action="Emploi.php" method="POST">
<input type="radio" name="Rech" id="Categ">Recherche par catégorie</input>
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
<br><br>
En
<br><br>
<select name="Lieu" id="Lieu">
    <option value="France">-Veuillez choisir une option-</option>
    <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
    <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
    <option value="Bretagne">Bretagne</option>
    <option value="Centre-Val de Loire">Centre-Val de Loire</option>
    <option value="Corse">Corse</option>
    <option value="Grand Est">Grand Est</option>
    <option value="Hauts-de-France">Hauts-de-France</option>
    <option value="Île-de-France">Île-de-France</option>
    <option value="Normandie">Normandie</option>
    <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
    <option value="Occitanie">Occitanie</option>
    <option value="Pays de la Loire">Pays de la Loire</option>
    <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
</select>
<br><br><br><br>
<input type="radio" name="Rech" id="cle">Recherche par nom ou référence</input>
<br><br>
<input type="text" placeholder="Entrez un mot clé" name="mo-cle" id="mot-cle">
<br><br><br><br>
<input type="submit" value="Rechercher">
</form></center>
</body>

<?php
$Type=$_POST["Type"];
$Temps=$_POST["Temps"];
$Domaine=$_POST["Domaine"];
$Lieu=$_POST["Lieu"];
echo "Vous rechercher un(e) $Type d'une durée $Temps dans le domaine $Domaine en $Lieu";

?>