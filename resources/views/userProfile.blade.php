@extends('template')
@section('head')
    <link href="css/profilvisiteur.css" rel="stylesheet">
    @endsection
@section('contenu')
    <div class="container">
        <section class="row">
            <div class="col-md-4" id="test">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset($user['picture_name']) }} " alt="Photo de profil" width="100%" />
                        <p>{{ $user['description'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $user['user_name'] }}
                            <a href="{{ route('friendsUserProfile',$user['id']) }}">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>

                    <div class="col-md-8">


                        @foreach ($spots as $spot)
                            <img src="{{ asset($spot->picture_name) }}"
                                 alt="{{ asset($spot->title) }}" width="100%" />
                            <div class="row">
                                <div class="col-xs-6">
                                    <p>{{ $spot->title }}</p>
                                </div>
                                <div class="col-xs-6">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    <i class="fa fa-diamond" aria-hidden="true">{{ $spot->likes_count }}</i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>{{ $spot->description_post }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
        </section>
    </div>
@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
    <script src='plugins/wheelzoom-master/wheelzoom.js'></script>
    <script src='js/mon-profil.js'></script>
    <script src="js/profilvisiteur.js"></script>
@endsection