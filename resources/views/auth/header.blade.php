<header>
    <div class="container-fluid container-main ">

        <nav class="navbar navbar-expand-md  navbar-dark container-nav ">
            <img src="{{ asset('img/logo1.png') }}" alt="" width="10%;" class="logo-img">
            <a class="navbar-brand" href="#"> &nbsp;CA/CS Online Test Series </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop"
                            data-toggle="dropdown">
                            Schedule
                        </a>
                        <div class="dropdown-menu  dropright text-center">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbardrop"
                                data-toggle="dropdown">
                                December 2021
                            </a>
                            <div class="dropdown-menu  ">
                                <a class="dropdown-item" href="CA Final Old Scheduled Test.pdf" target="_blank">CA Final
                                    Schedule(New)</a>
                                <a class="dropdown-item" href="CA Final Old Un-Schedules Test.pdf" target="_blank">CA Final
                                    Schedule(Old)</a>
                                <a class="dropdown-item" href="schedule.pdf" target="_blank">CA Intermediate</a>
                                <a class="dropdown-item" href="schedule.pdf" target="_blank">CA IPCC</a>
                            </div>




                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#syllabus">Syllabus </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"> Downloads </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"> Shop </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#contact"> Contact Us </a>
                    </li>
                </ul>
                @guest
                    @if (Route::has('login'))
                        <button onclick="document.getElementById('id01').style.display='block'" class="btn-log mr-2">Log In</button>
                    @endif
                    @if (Route::has('register'))
                        <button onclick="document.getElementById('id02').style.display='block'" class="btn-log">Register</button>
                    @endif
                @else
                    <a href="{{ url('/home') }}"><button class="btn-log mr-2">Home</button></a>
                @endguest
                <div id="id01" class="modal0">
                    <div class="modal-content-main animate">
                        <form class="" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                    title="Close Modal">&times;</span>
                                <img src="{{ asset('img/user-img.jpg') }}" alt="Avatar" class="avatar">
                            </div>

                            <div class="container-model flex-column">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="email"><b>Email</b></label>
                                        <input type="email" placeholder="Enter your email" name="email">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label for="psw"><b>Password</b></label>
                                        <input type="password" placeholder="Enter your password" name="password">
                                    </div>
                                </div>
                                <label>
                                    <input type="checkbox" name="remember"> Remember me
                                </label><br>
                                <button type="submit" class="btn-log" name="login">Login</button>
                            </div>
                        </form>        
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div>
                                        <p> I don't have Account 
                                            <button type="button" onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none'" class="btn-log  "> 
                                                Sign Up
                                            </button>
                                        </p>
                                        <p> Forgot <a href="{{ url('forgot-password') }}">password?</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div id="id02" class="modal-2" id="">
                    <div class="modal-content-main animate">
                        <form class="" action="{{ route('register') }}" method="POST" id="registerForm">
                            @csrf
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                                    title="Close Modal">&times;</span>
                                <img src="{{ asset('img/user-img.jpg') }}" alt="Avatar" class="avatar">
                            </div>

                            <div class="container pb-3">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="name"><b>Name</b> <span class="text-danger" id="name_err"></span></label>
                                        <input type="text" placeholder="Enter Name" name="name" id="name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="email"><b>Email</b> <span class="text-danger" id="email_err"></span></label>
                                        <input type="email" placeholder="Enter Email" name="email" id="email">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="psw"><b>Password</b> <span class="text-danger" id="pwd_err"></span></label>
                                        <input type="password" placeholder="Enter Password" name="password" id="password">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="psw"><b>Confirm Password</b> <span class="text-danger" id="conf_pwd_err"></span></label>
                                        <input type="password" placeholder="Enter Confirmed Password" name="password_confirmation" id="confirmed_pwd">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="mob"><b> Mobile No.</b> <span class="text-danger" id="mobile_err"></span></label>
                                        <input type="text" placeholder="Enter Mobile.No" name="mobile_no" id="mobile_no">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="ref"><b>Referral Code </b>(Optional) <span id="referral_err" class="text-danger"></span></label>
                                        <input type="text" placeholder="Enter Referral Code " name="referral_code" id="referral_code">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-">
                                        <label for="icai"><b> ICAI Reg No. </b> <span class="text-danger" id="icai_err"></span></label>
                                        <input type="text" placeholder="Enter ICAI Reg No. " name="icai_no" id="icai">
                                    </div>
                                </div>
                                <button type="button" class="btn-log" name="submitRegister" onclick="checkError()">Register</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </nav>

    </div>
</header>