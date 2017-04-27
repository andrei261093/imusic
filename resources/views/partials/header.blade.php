<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">iMusic</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
            <form action="{{ route('search')}}" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" id="input" name="input" class="typeahead form-control" placeholder="Search songs">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{Route('addSongs')}}">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Add Songs
                        
                    </a>
                </li>
                <li><a href="{{route('mySongs')}}">
                        <i class="glyphicon glyphicon-music" aria-hidden="true"></i> My Songs
                      
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        @if(Auth::user())
                            {{Auth::user()->name}} {{Auth::user()->lastName}}
                        @endif
                        @if(!Auth::user())
                                <i class="fa fa-user" aria-hidden="true"></i> Users
                        @endif

                        <span class="caret"></span></a>
                    @if(Auth::user())
                        <ul class="dropdown-menu">
                            <li><a href="{{route('logout')}}">Logout</a></li>

                        </ul>
                    @endif
                    @if(!Auth::user())
                        <ul class="dropdown-menu">
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign up</a></li>
                            
                        </ul>
                    @endif

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
