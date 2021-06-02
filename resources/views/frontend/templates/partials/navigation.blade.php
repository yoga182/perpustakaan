<div class="navbar-fixed">
    <nav>   
        <div class="nav-wrapper">
            <div class="container-fluid">
            <a class="btn red accent-1" href="{{ route('homepage') }}" label="IMIP" alt="imip">BOOK</a> 
             
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @else
                <ul id="dropdown1" class="dropdown-content">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </ul>
                <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name}}</a></li>
                @endguest
            </ul>
            </div> 
        </div>
    </nav>
</div>

    <ul class="sidenav" id="mobile-demo">
        @guest
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
        @else
        <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout</a>
                    </li>
        @endguest
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>