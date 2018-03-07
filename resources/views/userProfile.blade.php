<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>Seecretspot - Profil visiteur</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/profilvisiteur.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus" />
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage" />
    <meta name="robot" content="index,follow" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="plugins/wheelzoom-master/wheelzoom.js"></script>
</head>

<body>

    @include('navbar')

    <div class="container">
        <section class="row">
            <div class="col-md-4" id="test">
                <div>Je suis passionnée de sports de glisse toujours à la recherche des meilleurs spots!
                    <br/>Contactez moi pour partager
                    <br/>#surf #glisse #montagne</div>
            </div>
            <div class="col-md-8">
                <form method="post" action="{{ route('results') }}" id="form-recherche">
                    <input type="text" name="barre-de-recherche" id="barre-de-recherche" placeholder="Rechercher" />
                    <input type="submit" class="btn fa-input" value="&#xf002;" id="bouton-recherche" />
                </form>
                <img src="images/quebec.jpg" alt="Phot de profil" width="100%" />
                <div class="row">
                    <div class="col-xs-6">
                        <p>#sport #spotdeskate #paysbasque</p>
                    </div>
                    <div class="col-xs-6 icon-image">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        <i class="fa fa-diamond" aria-hidden="true">23</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Le Canada en hiver c'est la folie, il fait froid mais c'est maginique. Et les sport d'hivers sont tous au pied de notre porte. Je recommande.</p>
                        <form method="post">
                            <textarea name="commentaire" class="commentaire" rows="3">
                Postez ici votre commentaire...
              </textarea><br>
                            <input type="submit" value="Envoyer" />
                        </form>
                    </div>
                </div>
                <img src="images/plage.jpg" alt="Phot de profil" width="100%" />
                <div class="row">
                    <div class="col-xs-6">
                        <p>#sieste #plagedereve #bahamas</p>
                    </div>
                    <div class="col-xs-6 icon-image">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        <i class="fa fa-diamond" aria-hidden="true">12</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form method="post">
                            <textarea name="commentaire" class="commentaire" rows="3">
                Postez ici votre commentaire...
              </textarea><br>
                            <input type="submit" value="Envoyer" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>

    </footer>
    <script src="js/mon-profil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="js/profilvisiteur.js"></script>
</body>

</html>
