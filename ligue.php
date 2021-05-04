<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_ligue.css">
    <script defer src="script_ligue.js"></script>
    <title>Ligue</title>
</head>
<body>
    <h2>Structures hébergées</h2>
    
    <section class="basic-grid">
        <!-- Remarque : pour l'ajout d'un nouvelle ligue, copier le bloc ci-dessous
        ET changer l'id de la div avec classe 'modal' ainsi que data-modal-target avec le même nom -->
        <div class="card">
            <img src="./images/baseball.png" alt="equipement_baseball" width=200px>
            <p>Baseball</p>
            <button data-modal-target="#modal">Plus d'info</button>
            <div class="modal" id="modal">
                <div class=modal-header>
                    <div class="title">Baseball</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 01 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
        <div class="card">
            <img src="./images/football.png" alt="joueur_football" width=200px>
            <p>Football</p>
            <button data-modal-target="#modal2">Plus d'info</button>
            <div class="modal" id="modal2">
                <div class=modal-header>
                    <div class="title">Football</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 02 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
        <div class="card">
            <img src="./images/Natation.png" alt="nageuse" width=200px>
            <p>Natation</p>
            <button data-modal-target="#modal3">Plus d'info</button>
            <div class="modal" id="modal3">
                <div class=modal-header>
                    <div class="title">Natation</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 03 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
        <div class="card">
            <img src="./images/rugby.png" alt="joueur_rugby" width=200px>
            <p>Rugby</p>
            <button data-modal-target="#modal4">Plus d'info</button>
            <div class="modal" id="modal4">
                <div class=modal-header>
                    <div class="title">Rugby</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 04 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
        <div class="card">
            <img src="./images/tennis.png" alt="raquette_tennis" width=200px>
            <p>Tennis</p>
            <button data-modal-target="#modal5">Plus d'info</button>
            <div class="modal" id="modal5">
                <div class=modal-header>
                    <div class="title">Tennis</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 05 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
        <div class="card">
            <img src="./images/Volleyball.png" alt="balle_volleyball" width=200px>
            <p>Volleyball</p>
            <button data-modal-target="#modal6">Plus d'info</button>
            <div class="modal" id="modal6">
                <div class=modal-header>
                    <div class="title">Volleyball</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    Texte 06 &nbsp;&nbsp;&nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusamus?
                </div>
            </div>
            <div id="overlay"></div>
        </div>
    </section>
</body>
</html>