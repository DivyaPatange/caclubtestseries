<header>
    <div class="container-fluid container-main align-items-center">
        <nav class="navbar navbar-expand-lg  navbar-dark container-nav  ">
            <img src="img/logo1.png" alt="" width="10%;" class="logo-img">
            <a class="navbar-brand" href="{{ url('/') }}"> &nbsp;CA/CS Online Test Series </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end user_profile  " id="collapsibleNavbar">
                <ul class="navbar-nav">                                                     
                    <li class="nav-item dropdown "  >
                        <a class="nav-link text-light" href="#" id="navbardrop" data-toggle="dropdown" style="display: flex;">
                            <i class="fas fa-user mr-2" style="font-size: 30px;"></i> <h4>{{ Auth::user()->name }}</h4>                                   
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </li>
                </ul>                                      
            </div>
        </nav>
    </div>
</header>