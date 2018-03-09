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
    <meta name="description" content="Bienvenu sur la ploateforme SEECRETSPOT, partagez les lieux encore inconnus"/>
    <meta name="keyword" content="reseau social,secret,spot,lieu,insolite,sport,paysage"/>
    <meta name="robot" content="index,follow"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="plugins/wheelzoom-master/wheelzoom.js"></script>
</head>

<body>

@include('navbar')

<div class="container">
    <section class="row">
        <h1 class="col-xs-8 col-xs-offset-2">{{ $spot->title }}</h1>
        <div class="col-xs-2" style="margin-top: 5vh;text-align: right;">
            <img src="{{ asset('images/profil-two.jpg') }}" alt="photo profil"
                 style="width: 30%;"> <span style="font-size: 1.3em">{{ Auth::user()->user_name }}</span> <i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-user-plus" aria-hidden="true"></i></div>
        <img src="{{ asset($spotPic->picture_name) }}" alt="Photo du spot : {{ $spot->title }}" width="100%"/>
        <div class="row">
            <div class="col-xs-10">
                <p style="padding-top: 5px;">Description : {{ $spot->description_post }}</p>
            </div>
            <div class="col-xs-2 icon-image">
                <i class="fa fa-diamond" aria-hidden="true">23</i>
            </div>
            @isset($comments)
                <h3 class="col-xs-12">Commentaires :</h3>
                @foreach($comments as $comment)
                    <div class="col-xs-12" style="font-style: italic">- {{ $comment->content }}</div>
                @endforeach
            @endisset
            <form method="post" action="{{ route('postComments') }}" class="col-xs-12">
                @csrf
                <br>
                <label for="content">Votre commentaire :</label><br>
                <textarea name="content" class="commentaire" style="width: 100%; height: 70px;"></textarea>
                <input type="hidden" name="id" value="{{ $spot->id }}" style="border-radius: 3px;">
                <input type="submit" value="Envoyer" style="text-align: right;"/>
            </form>
        </div>
    </section>
</div>
<br><br>

<footer>

</footer>
<script src="js/mon-profil.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="js/profilvisiteur.js"></script>
</body>

</html>
