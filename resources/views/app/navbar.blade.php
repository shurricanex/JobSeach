
          <div class="container-fluid wall shadow" >
                <div class="row top-menu">
                    <div class="col-1 div1">
                        <a href="/" ><img src="{{asset('frontEnd')}}/img/IP-logo@3x.png"></a>
                    </div>
                    <div class="col-9 nav_list" >
                        <ul>
                            <li>
                                <a href="/joblist" >Job List</a>
                            </li>
                            <li>
                                <a href="/category">Job Category</a>
                            </li>
                            <li>
                                <a href="/company">Company List</a>
                            </li>
                            <li>
                                <a href="/location">Job Location</a>
                            </li>
                        {{-- </ul>
                        <ul class="navbar-nav ml-auto"> --}}
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" style="background-image: linear-gradient(to right, rgb(3, 107, 34) 20%, #0ab1f3); height:4em;width:1em; text-align:center" labelledby="navbarDropdown">
                                            <a class="dropdown-item"  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                    </div>
                    <div class="col-2 btn1">
                        <!-- <a class="btn btn-success text-light" href="signin.html">Sign In</a> -->
                    </div>
                </div>
            </div>
