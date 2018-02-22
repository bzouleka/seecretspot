<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Bienvenue sur Seecretspot - Connectez-vous</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus" />
  <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage" />
  <meta name="robot" content="index,follow" />
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./plugins/bootstrap-validator-master/js/validator.js"></script>
  <script type="text/javascript" src="./js/parametres.js"></script>
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
    <div id="formparametrediv" class="col-lg-offset-4 col-lg-6 col-lg-offset-4">
      <div class="row">
        <form id="formparametre" class="well" role="form" method="post" action="modif-parapmetre.php">
          <fieldset>
            <legend>
              <span class="hidden-xs">Parametre de votre </span>Compte</legend>

            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" name="nom" id="nom" class="form-control" required pattern="[A-Za-z]{1}[A-Za-z-']{1,28}[A-Za-z]{1}" data-pattern-error="Uniquement des caractères alphabétiques et éventuellement - ou '"
                placeholder="Votre nom" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="prenom">Prénom</label>
              <input type="text" name="prenom" id="prenom" class="form-control" required pattern="[A-Za-z]{1}[A-Za-z-']{1,28}[A-Za-z]{1}"
                data-pattern-error="Uniquement des caractères alphabétiques et éventuellement - ou '" placeholder="Votre prénom"
              />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="dateNaissance">date de Naissance</label>
              <input type="date" name="dateNaissance" id="dateNaissance" class="form-control" required data-naissance="" placeholder="Votre prénom"
              />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="utilisateur">Nom d'utilisateur</label>
              <input type="text" name="utilisateur" id="utilisateur" class="form-control" required placeholder="nom d'utilisateur" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="mail">E-mail</label>
              <input type="email" name="mail" id="mail" class="form-control" required placeholder="votre email" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" placeholder="Votre description"></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <br />
          </fieldset>
          <fieldset>
            <legend>Mot de passe</legend>
            <br/>
            <div class="form-group">
              <label for="old-pass">Ancien mot de passe</label>
              <input type="password" name="old-pass" id="old-pass" class="form-control" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="new-pass-1">Nouveau mot de passe</label>
              <input type="password" name="new-pass-1" id="new-pass-1" class="form-control" data-minlength="6" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                data-error-minlength="au moins 6 caractères dont 1 numérique et 1 alphabétique" data-error-pattern="au moins 6 caractères dont 1 numérique et 1 alphabétique"
                data-error-passe="La confirmation doit être égale au mot de passe" data-passe="#new-pass-2" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="new-pass-2"> Confirmation du nouveau mot de passe</label>
              <input type="password" name="new-pass-2" id="new-pass-2" class="form-control" data-passe="#new-pass-1" />
              <div class="help-block with-errors"></div>
            </div>
            <br />
          </fieldset>
          <fieldset>
            <legend>Notification</legend>
            <div id="not">
              <input type="checkbox" name="not-mail" id="not-mail" />
              <label id="not-mail" for="not-mail"> Notification par mail</label>
              <input type="checkbox" name="not-sms" id="not-sms" />
              <label for="not-sms"> Notification par SMS</label>
            </div>
            <br />
            <button type="submit">Enregistrer les modifications</button>
          </fieldset>
        </form>
      </div>
    </div>
    <footer>

    </footer>


</body>

</html>