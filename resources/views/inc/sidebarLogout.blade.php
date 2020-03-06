<!-- Begin Left Column -->
<div id="leftcolumn">

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                        <form class="login100-form validate-form" action="{{ route('login')}}" method="post">
                            @csrf

                            <span class="login100-form-title p-b-33">
						Account Login
					</span>

                            <div class="wrap-input100 validate-input" data-validate = "Username is required">
                                <input class="input100" type="text" name="username" placeholder="Username">

                            </div>

                            <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password" placeholder="Password">

                            </div>

                            <div class="container-login100-form-btn m-t-20">
                                <button class="login100-form-btn" type="submit" action ='{{ route('login')}}'>
                                    Sign in
                                </button>
                            </div>

                            <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

                                <a href="{{ route('password.request') }}" class="txt2 hov1">
                                    Password?
                                </a>
                            </div>

                            <div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

                                <a href="{{route('registration')}}" class="txt2 hov1">
                                    Sign up
                                </a>
                            </div>

                    </div>
                </div>
            </div>






        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            @if(session('Status'))
                <p>{{session('Status')}}</p>
            @endif

            <h2 class="mb-4">Sidebar #09</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        </form>
    </div>


    <script src="{{asset('js/app.js')}}"></script>


</div>
<!-- End Left Column -->
