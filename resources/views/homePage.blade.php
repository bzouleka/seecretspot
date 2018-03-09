<!DOCTYPE HTML>
<html lang="fr">

  <head>
    <title>Seecretspot - Page d'accueil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/carrousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/listeamis.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
  </head>

  <body>

    @include('navbar')

    <div class="container">
      <header class="row">
        <h1 class="col-xs-12">Chercher votre futur Seecret Spot</h1>
        <form method="get" action="{{route('results')}}" class="col-xs-12"  id="form-recherche">
          <input type="search" name="barre-de-recherche" id="barre-de-recherche" placeholder="Rechercher">
          <input type="submit" class="btn fa-input" value="&#xf002;"  id="bouton-recherche"/>
        </form>
      </header>

      <div class="principal-block">
      <div class="row">

        <section class="col-md-8 col-xs-12">

          <div class="row">

<!--  1èere photo avec carrousel          
            <div class="col-xs-12 photo-spot">
              <div class="row" id="choupi">
                <div class="col-sm-1 hidden-xs" id="gauche">
                  <img src="images/prev.png" alt="Précédent" id="prec" />
                </div>
                <div class="col-sm-10 col-xs-12" id="carrouselImages">
                  <img src="images/col-de-la-forclaz.jpg" alt="Col de la Forclaz" class="imagesCarrousel" id="premiereImage" />
            
                  <img src="images/gorges-du-fier.jpg" alt="Gorges du Fier" class="imagesCarrousel secondImages" />
            
                  <img src="images/Les-Aravis-Lac-des-Confins.jpg" alt="Lac des Confins" class="imagesCarrousel secondImages" />
            
                  <img src="images/arriveeSousFauteuil_tournette.jpg" alt="La Tournette" class="imagesCarrousel secondImages" />
            
                  <img src="images/croix-du-nivolet.jpg" alt="Croix du Nivolet" class="imagesCarrousel secondImages" />
                </div>
                <div class="col-sm-1 hidden-xs" id="droit">
                  <img src="images/next.png" alt="Suivant" id="suivant" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12">
                  <img src="images/col-de-la-forclaz.jpg" alt="Col de la Forclaz" id="imageCachee" />
                </div>
              </div>
              <div class="row" id="boutons">
                <div class="col-md-offset-1 col-md-3 hidden-sm hidden-xs">
                  <div class="hashtag">#Haute-Savoie</div>
                </div>
                <div class="col-md-4 col-xs-12">
                  <i class="fa fa-circle" aria-hidden="true" id="0"></i>
                </div>
                <div class="hidden-lg hidden-md col-sm-offset-1 col-sm-7 col-xs-8">
                  <div class="hashtag">#Haute-Savoie</div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <div class="icon-image">
                    <i class="fa fa-diamond" aria-hidden="true"></i>
                    <a href="message.html" class="a-icon">
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
-->
            @isset($spots)
            @foreach ($spots as $spot)
            <div class="col-xs-12">
                <a href="{{ '/spot?id='.$spot->id }}"><img src="{{ asset($spot->picture_name) }}" alt="{{ asset($spot->title) }}" style="width: 100%" class="photo-spot"></a>
            </div>
            <div class="col-xs-3">
              <div class="hashtag"><a href="{{ route('userProfile',[$spot->user_id]) }}">{{ $spot->user_name }}</a></div>
            </div>
            <div class="col-xs-6">
              <div class="hashtag">{{ $spot->title }}</div>
            </div>
            <div class="col-xs-3">
              <div class="icon-image">
              <i class="fa fa-diamond" aria-hidden="true">{{ $spot->likes_count }}</i>
              <a href="{{ '/message?id='.$spot->user_id }}" class="a-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
              </div>
            </div>
            
            @endforeach
              @endisset

        </section>

        <aside class="col-xs-4 hidden-sm hidden-xs">
          <section class="col-xs-12" id="listeamis">
            <div class="row">
              <h2>Mes Seecret Friends</h2>
              @foreach ($friends as $friend)
                  <div class="col-xs-12">
                    <a href="{{ route('userProfile',[$friend->id]) }}">
                      <img src="{{ asset($friend->picture_name) }}" alt="{{ $friend->user_name }}" width="60%" class="photo-profil">
                    </a>
                    {{ $friend->user_name }}
                  </div>
              @endforeach
            </div>
          </section>

        <aside class="col-xs-4 hidden-sm hidden-xs">
          <div class="row"></div>
          <h2 class="col-xs-12">Mes Seecret Friends :</h2>
          <section class="col-xs-12" id="listeamis"></section>
        </aside>

        <footer>

        </footer>
      </div>
      </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
      <script src="js\page_principale.js" charset="utf-8"></script>
      <script src="js/carrousel.js"></script>
      <script src="js/listeamis.js"></script>
  </body>
</html>
