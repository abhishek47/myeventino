 <!-- Mobile Navigation 
    <div class="menu-responsive fixed-top hidden-xs" style="width: 100%; margin: 0;padding: 0;height: 30px;position: fixed;">
      <i class="fa fa-reorder menu-trigger"></i>
    </div>-->


    <!-- Main Navigation -->
    <nav id="navigation" class="style-2">
      <div class="container">
          <ul id="responsive">

            <li><a class="" href="/">Home</a></li>
            <li><a class="" href="/venues">Venues</a></li>

             <li><a class="" href="/events">Events</a></li>
              <li><a class="" href="/vendors">Vendors</a></li>
              <li><a class="" href="/blog">Blog</a></li>

            
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

                <li><a class="" href="/">Showcase My Event</a></li>

              
                
              </ul>
            </li>

         

          </ul>
      </div>
    </nav>
     <!--<div class="clearfix"></div>-->
    
    <!-- Main Navigation / End -->