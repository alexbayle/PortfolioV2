<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/app.css"/>
    <link rel="stylesheet" href="css/nivo-slider.css"/>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Portfolio</a>
        </div>
    </div>
</div>

<div class="container">
    <?php //for($j = 1;$j <= 1;$j++): ?>
        <div class="row">
            <?php //for($i = 1;$i <= 4;$i++): ?>

                <article class="col-xs-3 work" id="projet-1" style="padding: 0;">
                    <img src="img/beatriceDelaygue/beatrice_delaygue.png" alt="" style="height: 126px;"/><br />

                    <p class="title">Béatrice Delaygue</p>

                    <p class="subtitle">Wordpress</p>
                    <div class="work_detail">
                        <hr>

                        <div class="row">

                            <div class="col-xs-8">
                                <div class="work_slideshow stagger4">
                                    <img src="img/beatriceDelaygue/beatrice_delaygue.png" alt=""/>
                                    <img src="img/beatriceDelaygue/beatrice_delaygue_bio.png" alt=""/>
                                    <img src="img/beatriceDelaygue/beatrice_delaygue_galerie.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <h2 class="stagger1">Beatrice Delaygue</h2>
                                <p class="stagger2"><em>Développeur web</em></p>
                                <p class="stagger3">Site vitrine d'une artiste peintre lui permettant d'afficher ses oeuvres.<br/>
                                Site développé sous WordPress.
                                </p>
                            </div>

                        </div>

                        <hr>
                    </div>
                </article>
                <article class="col-xs-3 work" id="projet-2" style="padding: 0;">
                    <img src="img/levriere/levriere.png" alt=""/><br />

                    <p class="title">La Lévrière</p>

                    <p class="subtitle">Wordpress</p>
                    <div class="work_detail">
                        <hr>

                        <div class="row">

                            <div class="col-xs-8">
                                <div class="work_slideshow stagger4">
                                    <img src="img/levriere/levriere.png" alt=""/>
                                    <img src="img/levriere/levriere_1.png" alt=""/>
                                    <img src="img/levriere/levriere_2.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <h2 class="stagger1">La Lévrière</h2>
                                <p class="stagger2"><em>Chef de projet</em></p>
                                <p class="stagger3">Refonte d'un site de gite et chambres d'hotes <br/>
                                Site réalisé sous WordPress</p>
                            </div>

                        </div>

                        <hr>
                    </div>
                </article>
                <article class="col-xs-3 work" id="projet-3" style="padding: 0;">
                    <img src="img/mutum/mutum_home.png" alt=""/><br />

                    <p class="title">Mutum</p>

                    <p class="subtitle">Framework propriétaire</p>
                    <div class="work_detail">
                        <hr>

                        <div class="row">

                            <div class="col-xs-8">
                                <div class="work_slideshow stagger4">
                                    <img src="img/mutum/mutum_home.png" alt=""/>
                                    <img src="img/mutum/mutum_profil.png" alt=""/>
                                    <img src="img/mutum/mutum_loan.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <h2 class="stagger1">Mutum</h2>
                                <p class="stagger2"><em>Développeur Web</em></p>
                                <p class="stagger3">Développement de la version 2 de Mutum. <br/>
                                    <br/>
                                    - Framework propriétaire (MVC)<br/>
                                    - Intégration HTML5 / CSS3 de maquette faite sous Photoshop<br/>
                                    - Développement PHP<br/>
                                    - Utilisation du JS/JQuery/AJAX<br/>
                                    - Gestion de Base de données en SQL<br/>
                                    - Versioning avec Git<br/>
                                    <br/>
                                    Utilisation de différentes api :<br/>
                                    Mangopay, Facebook, Google, Outlook, Yahoo et Mailjet</p>
                            </div>

                        </div>

                        <hr>
                    </div>
                </article>
                <article class="col-xs-3 work" id="projet-4" style="padding: 0;">
                    <img src="" alt=""/><br />

                    <p class="title">Mon Portfolio V2</p>

                    <p class="subtitle"></p>
                    <div class="work_detail">
                        <hr>

                        <div class="row">

                            <div class="col-xs-8">
                                <div class="work_slideshow stagger4">
                                    <img src="" alt=""/>
                                    <img src="" alt=""/>
                                    <img src="" alt=""/>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <h2 class="stagger1">Mon Porfolio V2</h2>
                                <p class="stagger2"><em></em></p>
                                <p class="stagger3"></p>
                            </div>

                        </div>

                        <hr>
                    </div>
                </article>
            <?php //endfor; ?>
        </div>
        <div class="row-detail"></div>
    <?php //endfor; ?>
</div>

<div class="footer">

</div>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<script type="text/javascript" src="js/portfolio.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

</body>
</html>