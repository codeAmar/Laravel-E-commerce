<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Marvel Comics</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li class="  dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(!Auth::check())
                        <li><a href="{{ route('user.signIn') }}"><span>Sign in</span><i
                                        class="fa fa-sign-in my-float-right" aria-hidden="true"></i></a></li>

                        <li><a href="{{ route('user.signUp') }}"><span>Sign up </span><i
                                        class="fa fa-user-plus my-float-right" aria-hidden="true"></i></a></li>
                        @endif


                        @if(Auth::check())

                            <li><a href="{{ route('user.profile') }}"><span>My Profile</span><i
                                            class="fa fa-user my-float-right" aria-hidden="true"></i></a></li>

                            <li role="separator" class="divider"></li>


                            <li><a href="{{ route('user.settings') }}"><span>Settings</span><i
                                            class="fa fa-cogs my-float-right" aria-hidden="true"></i></a></li>

                            <li><a href="{{ route('user.logOut') }}"><span>Log out</span><i
                                            class="fa fa-sign-out my-float-right" aria-hidden="true"></i>
                                </a></li>
                        @endif
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="badge alert-danger">5</span></a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>