<header>
  <div class="encabezado">
    <img id="logo" src="/img/FourBakery.png" width="80px" alt="">

    <nav class='navbar navbar-expand-md navbar-light light-blue lighten-4' id="menu">

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
          <li class='nav-item menuPrincipal usuario'>
            <button class="btn" type="button" name="button" data-toggle="dropdown">
              <span class='fa fa-user-circle' width="6" height="6"></span>
              @if(Auth::check())
              <p>{{Auth::user()->name}}</p>
              @endif
            </button>
            <ul class="" id=''>
              <li id=""><a href="{{url("login")}}">Inicia Sesión</a></li>
              <li id=""><a href="{{url("registro")}}">Registrate</a></li>
              <li id=""><a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>