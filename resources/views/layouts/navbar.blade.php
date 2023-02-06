
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0 ">
    <div class="container-fluid">
     <nav class="navbar navbar-light bg-transparent p-0">
      <a class="navbar-brand p-0 " href="/">
        <img src="{{asset('assets/logo2.png')}}" height="50" class="d-inline-block align-top" alt="">
      </a>
    </nav>
    
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="mx-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="/"
                >Home</a
              >
            </li> 
            @auth
            @if (Auth::user()->role=='admin' )
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              > Database</a>

              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item " href="/barang"
                    >Barang</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/pelanggan"
                    >Pengguna</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/transaksi"
                    >Transaksi</a
                  >
                </li>
              </ul>
            </li>
@endauth

@endif
           
          </ul>
        </div>
          
        @if (Route::has('login'))
          <div class="card  bg-transparent p-2 d-flex " >
            <ul class="nav navbar-nav navbar-right d-flex gap-3 ">
          @auth
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
            @else
              <li><a class="text-white" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a></li>
              
              @if (Route::has('register'))
              <li><a class="text-white" href="{{ route('register') }}"><span class="fas fa-user "></span> Sign Up</a></li>
              @endif
          @endauth
        @endif
            </ul>
          </div>
        </div>

    </div>
  </nav>
