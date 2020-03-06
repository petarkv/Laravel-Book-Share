<!-- Begin Left Column -->
<div id="leftcolumn">

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url('/storage/images/library.jpg');">
                <div class="user-logo">
                    <div class="img" style="background-image: url('{{Auth::user()->avatar}}');"></div>
                    <h3>{{ Auth::user()->name }} {{ Auth::user()->surname }} </h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{route('userDetails')}}"><span class="fa fa-home mr-3"></span>Profile Details</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span>Active Requests</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span>Requests</a>
                </li>
                <li>
                    <a href="{{route('uploadbooks')}}"><span class="fa fa-trophy mr-3"></span>Upload Books</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span>My Books</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span>Change password</a>
                </li>
                <li>
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

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
    </div>

    <script src="{{asset('/js/app.js')}}"></script>


</div>
<!-- End Left Column -->
