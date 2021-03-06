<!DOCTYPE HTML>
<html lang="fr">

  <head>
    <title>Bienvenue sur Seecretspot - Connectez-vous</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
  </head>

  <body>

    @include('navbar')

    <div class="container">
    <section class="row">
      <div class="col-xs-12">
        <form method="post" action="resultats.html" id="form-recherche">
          <input type="text" name="barre-de-recherche" id="barre-de-recherche" placeholder="Rechercher"/>
          <input type="submit" class="btn fa-input" value="&#xf002;"  id="bouton-recherche"/>
        </form>
      </div>
    </section>
    <section class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-6">
            <img src="images/cascade.jpg" alt="Cascade" width="100%" />
            <div class="row">
              <div class="col-xs-6">
                <div class="hashtag"><p>#sport #spotdeskate</p></div>
              </div>
              <div class="col-xs-6">
                <div class="icon-image">
                23<i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
              </div>
              </div>
           </div>
          </div>
          <div class="col-md-6">
            <img src="images/foret.jpg" alt="Cascade" width="100%" />
              <div class="row">
              <div class="col-xs-6">
              <div class="hashtag"><p>#sport #spotdeskate</p></div>
              </div>
              <div class="col-xs-6">
                <div class="icon-image">
                34<i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="row">
          <div class="col-md-6">
            <img src="images/route-66.jpg" alt="Cascade" width="100%" />
              <div class="row">
              <div class="col-xs-6">
              <div class="hashtag"<p>#sport #spotdeskate</p></div>
              </div>
              <div class="col-xs-6">
                <div class="icon-image">
                12<i class="fa fa-diamond" aria-hidden="true"></i>
                <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </div>
              </div>
           </div>
          </div>
          <div class="col-md-6">
            <img src="images/star-wars.jpg" alt="Cascade" width="100%" />
              <div class="row">
              <div class="col-xs-6">
              <div class="hashtag"><p>#sport #spotdeskate</p></div>
              </div>
              <div class="col-xs-6">
                <div class="icon-image">
                1984<i class="fa fa-diamond" aria-hidden="true" ></i>
                <a href="message.html" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    <footer>

    </footer>

  </body>
</html>
