<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        .esp1 {
            margin-bottom: 70px;
        }
        .p {
            line-height: 40px !important;
        }
        h3 {
            margin-top: 70px !important;
            margin-bottom: 40px !important;
        }
    </style>
</head>
<body>
    
<section id="main">
	<div class="container">
        <article class="box post">


        
<center>
    <header class="major">
		<a onclick="myFunction(x)"><h2 class="esp1">Coordonnées</h2></a>
	</header>
		<div id="myDIV" style="display: none;">
            
            <h3><u>Maison des ligues de lorraine</u></h3>

            <p class="ligne">13 rue Jean Moulin - BP 70001 54510 TOMBLAINE
            Tél. : 03.83.18.87.02<br>
            Fax : 03.83.18.87.03<br>
            Email : contact@m2l.fr<br></p>


            <h3><u>DIRECTEUR Lucien SAPIN</u></h3>


            Tél. : 03 83 18 87 02<br>

            Fax : 03 83 18 87 03<br>

            Email : lucien.gastaldello@m2l.fr<br>


            <h3><u>CHARGÉE IMPACT EMPLOI</u></h3>


            Nathalie GENAIS<br>

            Tél. : 03 83 18 87 05<br>

            Email : martine.genoux@m2l.fr<br>


            <h3><u>SECRÉTAIRE COMPTABLE</u></h3>

            Martine DUPONT<br>

            Tél. : 03 83 18 87 07<br>

            Fax : 03 83 18 87 03<br>

            Email : jeannine.vuillemard@m2l.fr<br><br><br><br><br>
        </div>
<!-- Fénetre réductible -->
    <header class="major">
            <a onclick="myFunction(y)"><h2 class="esp1">Contact</h2></a>
    </header>


   <div id="myDIV2" style="display: none;">

    <div class="row">
				<div class="col-4 col-6-medium col-12-small">
					<section class="box">
                        <h4><u>Nom :</u></h4> <br> 
                            <input> 
                        
                        <br><h4><u>Prenom :</u></h4> <br> 
                            <input> 
                        
                        <br><h4><u>Email :</u></h4> <br>
                            <input placeholder="Votre@mail.fr"> 
                
					</section>
				</div>
				<div class="col-8 col-6-medium col-12-small" style="margin-top:Opx !important;">
					<section class="box">
                        <h4>Message :</h4>
                            <textarea style="height: 10em; width: 100%;">
                            </textarea>			
                        </br>
                        <input type="submit" value="Envoyer">

					</section>
				</div>
	</div>     
    </div>     
    
</center>


        </article>
    </div>
</section>


<?php
include 'footer.php';
?>
    <script>
        var x = document.getElementById("myDIV");
        var y = document.getElementById("myDIV2");
        function myFunction(x) {
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
		}
	</script>

</body>
</html>