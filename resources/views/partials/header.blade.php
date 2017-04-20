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
            <a class="navbar-brand" href="/">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">ComboBox<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        
                            <li><a href="">option  1</a></li>
                            <li><a href="">option  1</a></li>
                        
                        <li role="separator" class="divider"></li>
                        <li><a href="">All</a></li>
                    </ul>
                </li>
            </ul>
            <form action="" class="navbar-form navbar-left">
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
                <li><a href="">
                        <i class="glyphicon glyphicon-music" aria-hidden="true"></i> My Songs
                        <span class="badge">2</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        @if(Auth::user())
                            {{Auth::user()->firstName}} {{Auth::user()->lastName}}
                        @endif
                        @if(!Auth::user())
                                <i class="fa fa-user" aria-hidden="true"></i> Users
                        @endif

                        <span class="caret"></span></a>
                    @if(Auth::user())
                        <ul class="dropdown-menu">

                            <li><a href="{{route('user.profile')}}">Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('user.logout')}}">Logout</a></li>

                        </ul>
                    @endif
                    @if(!Auth::user())
                        <ul class="dropdown-menu">
                            <li><a href="">Login</a></li>
                            <li><a href="">Sign up</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/about">About</a></li>
                        </ul>
                    @endif

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<script type="text/javascript">
    var path = "";
    $('input.typeahead').typeahead({
        source: function (query, process) {
            return $.get(path, { query : query }, function (data) {
                return process(data);
            } )
        }
    });
</script>