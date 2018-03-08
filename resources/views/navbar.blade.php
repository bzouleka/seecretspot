
<nav class="row">
    <div class="col-xs-8" id="logo_title"><a href="{{route('homePage')}}" id="retour-flux"><i class="fa fa-diamond" aria-hidden="true"></i><span class="hidden-xs">SeecretSpot</span></a></div>
    <div class="col-xs-4">
        <ul id="menu_connect">
            <li class="menu_share"><a href="{{ route('newSpot') }}" id="menu_lien_share"><span class="hidden-sm hidden-xs" id="menu_share_letter">Partager </span><i class="fa fa-camera-retro" aria-hidden="true" id="menu_share_icon"></i></a></li>
            <li class="menu_icon"><a href="{{route('myProfile')}}" class="menu_lien"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href="{{route('message')}}" class="menu_lien"><i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href="{{route('results')}}" class="menu_lien"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href="{{route('settings')}}" class="menu_lien" ><i class="fa fa-cog" aria-hidden="true"></i></a></li>
            <li class="menu_icon"><a href="{{route('logout')}}" class="menu_lien" style="color: red;"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</nav>
@if ($errors->any())
    <div class="container">
    <div class="col-xs-offset-3 col-xs-6 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
@endif


