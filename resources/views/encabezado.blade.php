<header>
  <div class="encabezado">
    <a href="{{url("index")}}"><img id="logo" src="/img/FourBakery.png" width="80px" alt=""></a> 

    <nav class='navbar navbar-fixed-top navbar-expand-md navbar-light light-blue lighten-4' id="menu">

      <div class="w-100 text-right">
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="dark-blue-text">
            <i class="fas fa-bars fa-1x"></i>
          </span>
        </button>
      </div>

      <div id="navbarSupportedContent1" class="collapse navbar-collapse menu flex-grow-1 text-right">
        <ul class='navbar-nav ml-auto flex-nowrap'>
          <li class="nav-item menuPrincipal">
            <a class="nav-link" href="{{url("index")}}">INICIO</a>
          </li>
          <li class="nav-item menuPrincipal">
            <a class="nav-link" href="{{url("productos")}}">PRODUCTOS</a>
          </li>
          <li class="nav-item menuPrincipal">
            <a class="nav-link" href="{{url("faq")}}">FAQ</a>
          </li>
          <li class="nav-item menuPrincipal">
            <a class="nav-link" href="{{url("contacto")}}">CONTACTO</a>
          </li>
          <li class="nav-item menuPrincipal">
            <a href="{{url("carrito")}}"><span class='fas fa-cart-arrow-down' width="6"
                height="6"></span>{{Cart::content()->count()}}</a>
          </li>
          <li class='nav-item menuPrincipal usuario'>
            <button class="btn" type="button" name="button" data-toggle="dropdown">
              @if(Auth::check() && Auth::user()->avatar != "")
              <img class="imagenRedonda" src="/storage/{{Auth::user()->avatar}}">
              <p>{{Auth::user()->name}}</p>
              @elseif(Auth::check() && Auth::user()->avatar == "")
              <img class="imagenRedonda" src="/img/imagenPorDefecto.png">
              <p>{{Auth::user()->name}}</p>
              @else
              <span class='fa fa-user-circle' width="6" height="6"></span>
              @endif
            </button>
            @if (Auth::check())
            <ul class="dropdown-menu" id='dropdown-ul'>
              <li id="dropdown-login"><a href="{{url("perfil")}}">Mi Perfil</a></li>
              <li id="dropdown-login"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
            @else
            <ul class="dropdown-menu" id='dropdown-ul'>
              <li id="dropdown-login"><a href="{{url("login")}}">Inicia Sesión</a></li>
              <li id="dropdown-login"><a href="{{url("registro")}}">Registrate</a></li>
            </ul>
            @endif
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
