@extends('template')

@section('contenu')
    <div class="container">
        <section class="row">
            <div class="col-md-4" id="test">
              <div class="row">
                <div class="col-md-6">
                    <br/>
                    <img src="{{ asset($user['picture_name']) }} " alt="Phot de profil" width="100%" />
                </div>
                <div class="col-md-6">
                    <h4>{{ $user['user_name'] }} <a href="{{ route('settings') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></h4>
                    <form method="post" action="{{ route('postMyProfile') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="myFile" placeholder="Choisissez votre photo"/>
                        <textarea name="description" id="ameliorer" rows="2" cols="33" value="{{ $user['description'] }}" 
                                  placeholder = "Description...">{{ $user['description'] }}</textarea><br>
                        <input type="submit" value="Envoyer" />
                    </form>
                </div>           
              </div> 

              <div class="row">
                <h2>Mes Seecret Friends</h2>              
                @foreach ($friends as $friend)
                  <div class="col-md-6">
                    <br/>
                    <img src="{{ asset($friend->picture_name) }} " alt="{{ $friend->user_name }}" width="100%" />
                  </div>
                 {{ $friend->user_name }}
              
                @endforeach
              </div>
<!--                <div><br/>Contactez moi pour partager<br/>#surf #glisse #montagne</div>   -->
            </div>

<!--            <div class="col-md-4" id="test">
              <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($user['picture_name']) }} " alt="Phot de profil" width="100%" />
                </div>
                <div class="col-md-6">
                    <form method="post" action="{{ route('postMyProfile') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>Choisissez votre photo</div>
                        <input type="file" name="myFile" />
                        <textarea name="commentaire" id="ameliorer" rows="2" cols="33" placeholder = "Description..."></textarea><br>
                        <input type="submit" value="Envoyer" />
                    </form>
                </div>
              </div>
                <h3>{{ $user['user_name'] }} <a href="{{ asset('parametres.html')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></h3>
                <div>{{ $user['description'] }}<br/>Contactez moi pour partager<br/>#surf #glisse #montagne</div>
            </div>
  -->
            <div class="col-md-8">

              @foreach ($spots as $spot)
                @foreach ($spot->photos as $photo)
                    @if ($photo->priority != null)
                        <a href="{{ '/spot?id='.$spot->id }}">
                            <img src="{{ asset($photo->picture_name) }}" alt="{{ asset($spot->title) }}" width="100%" />
                        </a>
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
                    @endif
                @endforeach                
              @endforeach
            </div>
        </section>
    </div>
@endsection

@section('js')
<!--
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
--> 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src='plugins/wheelzoom-master/wheelzoom.js'></script>
    <script src='js/mon-profil.js'></script>
@endsection