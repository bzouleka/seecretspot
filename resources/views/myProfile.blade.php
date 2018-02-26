<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>Bienvenue sur Seecretspot - Connectez-vous</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href= "{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Condensed" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="Bienvenue sur la plateforme SEECRETSPOT, partagez les lieux encore inconnus" />
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage" />
    <meta name="robot" content="index,follow" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="{{ asset('plugins/wheelzoom-master/wheelzoom.js') }}"></script>
</head>

<body>

    @include('navbar')

    <div class="container">
        <section class="row">
            <div class="col-md-4" id="test">
                <img src="{{ asset('images/photo-profil-visiteur.jpg') }} " alt="Phot de profil" width="40%" class="hidden-sm hidden-xs" />
                <h3>John Doe <a href="{{ asset('parametres.html')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></h3>
                <div>Je suis passionné de sports de glisse toujours à la recherche des meilleurs spots!<br/>Contactez moi pour partager<br/>#surf #glisse #montagne</div>
            </div>
            <div class="col-md-8">
                <form method="post" action="/myProfile">
                    {{ csrf_field() }}
                    <input type="file" name="poster" />
                    <textarea name="commentaire" id="ameliorer" rows="3">Description...</textarea><br>
                    <input type="submit" value="Envoyer" />
                </form>
                <img src="{{ asset('images/quebec.jpg') }}" alt="Phot de profil" width="100%" />
                <div class="row">
                    <div class="col-xs-6">
                        <p>#sport #spotdeskate #paysbasque</p>
                    </div>
                    <div class="col-xs-6">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        <i class="fa fa-diamond" aria-hidden="true">32</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Le Canada en hiver c'est la folie, il fait froid mais c'est magnifique. Et les sports d'hivers sont tous au pied de notre porte. Je recommande.</p>
                    </div>
                </div>
                <img src="{{ asset('images/plage.jpg') }}" alt="Phot de profil" width="100%" />
                <div class="row">
                    <div class="col-xs-6">
                        <p>#sieste #plagedereve #bahamas</p>
                    </div>
                    <div class="col-xs-6">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                        <i class="fa fa-diamond" aria-hidden="true">51</i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Le Canada en hiver c'est la folie, il fait froid mais c'est magnifique. Et les sports d'hivers sont tous au pied de notre porte. Je recommande.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>

    </footer>
    <script src="{{ asset('js/mon-profil.js') }}"></script>
</body>

</html>
