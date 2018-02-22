<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Seecretspot - Messagerie</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/listeamis.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus" />
  <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage" />
  <meta name="robot" content="index,follow" />
</head>

<body>

  <nav class="row">
    <div class="col-xs-8" id="logo_title">
      <a href="page-principale.html" id="retour-flux">
        <i class="fa fa-diamond" aria-hidden="true"></i>
        <span class="hidden-xs">SeecretSpot</span>
      </a>
    </div>
    <div class="col-xs-4">
      <ul id="menu_connect">
        <li class="menu_share">
          <a href="poster-une-photo.html" id="menu_lien_share">
            <span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span>
            <i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i>
          </a>
        </li>
        <li class="menu_icon">
          <a href="mon-profil.html" class="menu_lien">
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </li>
        <li class="menu_icon">
          <a href="message.html" class="menu_lien">
            <i class="fa fa-comments-o" aria-hidden="true"></i>
          </a>
        </li>
        <li class="menu_icon">
          <a href="resultats.html" class="menu_lien">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </li>
        <li class="menu_icon">
          <a href="parametres.html" class="menu_lien">
            <i class="fa fa-cog" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">

      <section class="col-xs-8">
        <h2>
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span class="hidden-sm hidden-xs">Écrire à un autre Seecret Spoter</span>
        </h2>
        <form method="post" action=".php">
          <div class="col-xs-12">

            <input type="text" name="contact" id="contact">
            <label for="contact">
              <i class="fa fa-at" aria-hidden="true"></i>
            </label>
          </div>
          <div class="col-xs-12">
            <textarea name="message" id="message"></textarea>
          </div>
          <div class="col-xs-12">
            <input type="submit" value="Envoyer" id="bouton-message" />
          </div>
        </form>
      </section>

      <aside class="col-xs-4">

        <div class="row">
          <h2>
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <span class="hidden-sm hidden-xs">Mes Conversations</span>
          </h2>
          <section class="col-xs-12" id="listeamis"></section>
        </div>

      </aside>

      <footer>

      </footer>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/listeamisconv.js"></script>
</body>

</html>