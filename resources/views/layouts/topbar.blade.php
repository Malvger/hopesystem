        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
  
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
  
              
  
              <div class="topbar-divider d-none d-sm-block"></div>
  
              
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                       </li>
                       @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                          </li>
                      @endif
                  @else
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle mr-2" src="{{asset(Auth::user()->url)}}">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('login-perfil').submit();">{{ __('Perfil') }}</a>
                        
                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('login-clave').submit();">{{ __('Cambio clave') }}</a>

                        <div class="dropdown-divider"></div>
  
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>  
                          {{ __('Cerrar sesión') }} </a>
  
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                        <form id="login-perfil" action="{{ url('perfil') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                              {{method_field('PATCH')}}
                                <input type="hide" name="id" value="{{ Auth::user()->id }}">
                        </form>
                        <form id="login-clave" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                <input type="hide" value="{{ Auth::user()->id }}">
                        </form>
                      </div>
                  @endguest
              </li>
  
            </ul>
  
          </nav>
          <!-- End of Topbar -->