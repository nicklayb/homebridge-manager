<nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Homebridge <small>manager</small></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach ($nav as $navKey => $navItem)
                <li {!!($navKey == $pageName) ? 'class="active"' : ''!!}><a href="{{$navKey}}">{{$navItem}}</a>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
