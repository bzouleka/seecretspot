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

  @include('navbar')

  <div class="container">
    <div id="formparametrediv" class="col-lg-offset-4 col-lg-6 col-lg-offset-4">
      <div class="row">
        <form id="formparametre" class="well" role="form" method="post" action="{{ Route('postSettings') }}">
          @csrf
          <fieldset>
            <legend>
              <span class="hidden-xs">Parametre de votre </span>Compte</legend>

            <div class="form-group">
              <label for="last_name">Nom</label>
              <input type="text" name="last_name" id="nom" class="form-control" value="{{$user->last_name}}"
                placeholder="Votre nom" />
              {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}

              <div class="help-block with-errors"></div>
            </div>
              <div class="help-block with-errors"></div>
            <br />
            <div class="form-group">
              <label for="first_name">Prénom</label>
              <input type="text" name="first_name" id="prenom" class="form-control" placeholder="Votre prénom" value="{{$user->first_name}}"
              />
              {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}

              <div class="help-block with-errors"></div>
            </div>


              <div class="help-block with-errors"></div>

            <br />
            <div class="form-group">
              <label for="birthday">date de Naissance</label>
              <input type="date" name="birthday" id="dateNaissance" class="form-control" placeholder="" value="{{$user->birthday}}"
              />
              <div class="help-block with-errors"></div>
            </div>

              <div class="help-block with-errors"></div>

            <br />
            <div class="form-group">
              <label for="user_name">Nom d'utilisateur</label>
              <input type="text" name="user_name" id="utilisateur" class="form-control" placeholder="nom d'utilisateur" value="{{$user->user_name}}" />
              {!! $errors->first('user_name', '<div class="invalid-feedback">:message</div>') !!}

              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="mail" class="form-control" placeholder="votre email"  value="{{$user->email}}"/>
              <div class="help-block with-errors"></div>
            </div>
            <br />
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control"  placeholder="Votre description">{{ $user->description}}</textarea>
              <div class="help-block with-errors"></div>
            </div>
            <br />
          </fieldset>
          <fieldset>
            <legend>Mot de passe</legend>
            <br/>

            <br />
            <div class="form-group">
              <label for="password">Nouveau mot de passe</label>
              <input type="password" name="password" id="new-pass-1" class="form-control" />

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
            <input type="button" name="type"  value="Centre d'intérêts">

            <button type="submit">Enregistrer les modifications</button>
          </fieldset>
        </form>
      </div>
  </div>
    </div>
    <footer>

    </footer>


</body>

</html>