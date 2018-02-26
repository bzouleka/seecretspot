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

    <nav class="row">
      <div class="col-xs-8" id="logo_title"><i class="fa fa-diamond" aria-hidden="true"></i><span class="hidden-xs">SeecretSpot</span></div>
      <div class="col-xs-4" id="connexion"><a href="{{route('getIndex')}}"<span class="hidden-xs hidden-sm" id="se_connecter">Se Connecter</span><span class="visible-xs visible-sm"><i class="fa fa-sign-in" aria-hidden="true" id="se_connecter_resp"></i></span></a></div>
    </nav>


 <div class="container">

  <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3">
    <h1 id="titre-inscription">Inscription</h1>
    <form method="post" action="{{route('signup')}}" class="well" id="font-inscription">
    <fieldset>
      <label for="email"> Email </label>
      <input id="email" type="text" class="form-control" placeholder="Ex: jeanmicheldu74@gmail.com" required>
      <label for="nom"> Prénom </label>
      <input id="nom" type="text" class="form-control" placeholder="Prénom" name="first_name">
      <label for="nom"> Nom </label>
      <input id="nom" type="text" class="form-control" placeholder="Nom" name="last_name">
      <label for="nomutilisateur"> Nom d'utilisateur </label>
      <input id="nomutilisateur" type="text" class="form-control" name = "user_name" placeholder="Ex: JeanKevin74" required>
      <label for="listpays"> Pays d'origine </label>
      <select class="form-control" id="listpays" name = "country" ></select>
      <label for="password"> Mot de passe </label>
      <input id="password" type="password" class="form-control" name = "password"  required >
      <label for="password"> Confirmation mot de passe </label>
      <input id="password" type="password" class="form-control" name = "confirm_password" required >
      <br />
      <input type="submit" value="Envoyer" id="bouton-inscription"/>
      {{ csrf_field() }}

      <input type="checkbox" required> J'accepte
    </fieldset>
    </form>
  </div>
</div>


    <footer>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="js/listepays.js"></script>
  </body>
</html>
