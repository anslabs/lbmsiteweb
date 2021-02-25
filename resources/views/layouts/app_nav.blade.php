<li class="active">
    <a href="{{ route('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord </a>
</li>
<h3 class="menu-title">MENU</h3><!-- /.menu-title -->

<li class="menu-item-has-children dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Videos Pilote</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('pilotevideo.create') }}">Nouveau</a></li>
        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('pilotevideo.index') }}">Régistre</a></li>
    </ul>
</li>

@if(session('niv') == 0)
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Hotels</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('hotel.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('hotel.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Restaurants</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('restaurant.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('restaurant.index') }}">Régistre</a></li>
        </ul>
    </li>
@endif
@if(session('niv') == 1)
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Pays</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('pays.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('pays.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Départements</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('administrative.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('administrative.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Ville</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('ville.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('ville.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Hotels</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('hotel.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('hotel.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Restaurants</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('restaurant.create') }}">Nouveau</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('restaurant.index') }}">Régistre</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Administration</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('activation') }}">Activation-Suppression compte</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="{{ route('seeking') }}">Recherche</a></li>
        </ul>
    </li>
@endif