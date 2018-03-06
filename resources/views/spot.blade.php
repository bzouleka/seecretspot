<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Seecretspot - Messagerie</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/listeamis.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus" />
  <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage" />
  <meta name="robot" content="index,follow" />
</head>

<body>

      @include('navbar')

  <div class="container">
    <div class="row">

      <section class="col-xs-offset-2 col-xs-8">
        <h2>
          <i class="fa fa-diamond" aria-hidden="true"></i>
          <span class="hidden-sm hidden-xs">Publier votre nouveau Seecret Spot</span>
        </h2>
        <form method="post" action="{{ route('newPost') }}" enctype="multipart/form-data">
          @csrf
          <div class="col-xs-12">

            <input type="text" name="title" id="contact" placeholder=" Nom du Spot" style="border-radius: 3px;">
          </div>
          <div class="col-xs-12">
            <textarea name="description" id="message" placeholder="Description" style="border-radius: 3px;"></textarea>
          </div>
          <div class="col-xs-6">
            <label for="spotPicture">Photo du Spot (Format Jpeg | max. 2 Mo) :</label>
            <input type="file" name="spotPicture" id="spotPicture" accept="image/jpeg"/>
          </div>
          <div class="col-xs-6" style="text-align: right; ">
            <input type="submit" value="Envoyer" id="send-spot" />
          </div>
        </form>
      </section>

      <footer>

      </footer>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/listeamisconv.js"></script>
</body>

</html>