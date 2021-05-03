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
            <img src="./images/baseball.jpg" alt="match_baseball" width=200px>
            <p>Sport à préciser</p>
            <button data-modal-target="#modal">Open Modal</button>
            <div class="modal" id="modal">
                <div class=modal-header>
                    <div class="title">Example Modal</div>
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
            <img src="./img_ld/baseball.jpg" alt="match_baseball" width=200px>
            <p>Sport à préciser</p>
            <button data-modal-target="#modal2">Open Modal</button>
            <div class="modal" id="modal2">
                <div class=modal-header>
                    <div class="title">Example Modal</div>
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
            <img src="./img_ld/baseball.jpg" alt="match_baseball" width=200px>
            <p>Sport à préciser</p>
            <button data-modal-target="#modal3">Open Modal</button>
            <div class="modal" id="modal3">
                <div class=modal-header>
                    <div class="title">Example Modal</div>
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
    </section>
</body>
</html>