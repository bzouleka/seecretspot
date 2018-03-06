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
    @yield('head')
</head>

<body>

    @include('navbar')

    @yield('contenu')

    <footer>

    </footer>

    @yield ('js')
</body>

</html>
