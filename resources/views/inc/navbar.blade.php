{{-- <nav class="navbar navbar-inverse">
     <div class="container">
          <div class="navbar-header">
               <!-- Collapsed Hamburger -->
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>

               <!-- Branding Image -->
               <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
               </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
               <!-- Left Side Of Navbar -->
               <ul class="nav navbar-nav">
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/posts">Blogs</a></li>
               </ul>

               <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                         <li><a href="{{ route('login') }}">Login</a></li>
                         <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                         <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <ul class="dropdown-menu" role="menu">
                              <li><a href="/dashboard">Dashboard</a></li>
                              <li>
                                   <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        Logout
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                   </form>
                              </li>
                         </ul>
                         </li>
                    @endif
               </ul>
          </div>
     </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                         <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ url('/services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ url('/posts') }}">Blogs</a>
                    </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                         <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">Login</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">Register</a>
                         </li>
                    @else
                         <li class="dropdown">
                         <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                         </a>
                              <ul class="dropdown-menu" role="menu">
                                   <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                             Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                        </form>
                                   </li>
                              </ul>
                         </li>
                    @endif
               </ul>
          </div>
     </div>
</nav>