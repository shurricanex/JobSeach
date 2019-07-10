
          <div class="container-fluid wall shadow" >
                <div class="row top-menu" >
                    <div class=" col-1 div1">
                        <a href="/" ><img src="{{asset('frontEnd')}}/img/IP-logo@3x.png"></a>
                    </div>
                    <ul class="col-11 nav_list" >
                        <ul style="margin-bottom:0">
                            <li>
                                <a href="/joblist"  >Job List</a>
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
                            @if(!Auth::guest())
                            <li >


                                        <a href="/posts/create" id="createPost"> Create </a>


                            </li>
                                @endif
                         </ul>
                        <ul class="  " style="float: right;">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item" >
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item" >
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class=" dropdown  "  >
                                        <a id="navbarDropdown"  class="    nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <ul class="dropdown-menu dropdown-menu-right"  style="background-image: linear-gradient(to right, rgb(3, 107, 34) 20%, #0ab1f3); height:150px;width:200px; padding: 0px;" labelledby="navbarDropdown">
                                            <li><a href="/companyDashboard">My Company</a></li>
                                         <li style="text-align: center" >  <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                         </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                    </div>

                </div>
            </div>
          <div class="container-fluid new_nav">
              <i class="fa fa-bars text-light float-left" id="bar"></i>
              <!-- <a class="btn btn-success float-left ml-3 text-light" href="signin.html">Sign In</a> -->
              <div class="img">
                  <a href="/" ><img src="img/IP-logo@3x.png"></a>
              </div>
              <div class="sub_nav">
                  <ul>
                      <li>
                          <a href="/joblist" >Job List</a>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a href="/category">Job Category</a>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a href="/company">Company List</a>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a href="/location">Job Location</a>
                      </li>
                  </ul>
              </div>

          </div>



          <!-- end nav -->
