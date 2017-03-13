
<!-- Horizontal navigation-->
<div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-light navbar-shadow navbar-without-dd-arrow navbar-fixed">
    <!-- Horizontal menu content-->
    <div data-menu="menu-container" class="navbar-container main-menu-content">

        <!-- include includes/mixins-->
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">

            <li class="nav-item">
                <a href="{{url("/sales")}}"  class="nav-link">
                    <i class="icon-bar-chart font-large-1 @if(Route::current()->getName()=="sales") blue @else blue-grey @endif"></i>
                    <span>Ventes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('client.index')}}"  class="nav-link">
                    <i class="icon-users2 font-large-1 @if(Route::current()->getName()=="client.index") blue @else blue-grey @endif"></i>
                    <span>Clients</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url("/stockes")}}"  class="nav-link">

                    <i class="icon-box font-large-1 @if(Route::current()->getName()=="stockes") blue @else blue-grey @endif"></i>
                    <span>Stockes</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                    <i class="icon-book3 font-large-1
                        @if(Route::current()->getName()=="cat.index" || Route::current()->getName()=="produit.index")
                                blue
                        @else
                                blue-grey
                        @endif">

                    </i>
                    <span>Catalogue</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('produit.index')}}">Les Produits</a>
                    <a class="dropdown-item" href="{{route('cat.index')}}">Les Categories</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Les Remises</a>
                </div>
            </li>
            <li class="nav-item ">
                <a href="{{url("/shop")}}"  class="nav-link">
                    <i class="icon-home3 font-large-1 blue-grey"></i>
                    <span>Boutique</span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav float-xs-right">

            <li class="dropdown dropdown-user nav-item nav-link"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                    <span class="avatar avatar-online">
                        <img src="{{ asset('/assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar">
                        <i></i>
                    </span>
                    <h6 class="user-name"> lacaisse.ma</h6><i class="caret"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{url('caisses')}}" class="dropdown-item"><i class="icon-list"></i> Mes Caisses</a>
                    <a href="{{route('user.logout')}}" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>
<!-- Horizontal navigation-->