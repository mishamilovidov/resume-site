<nav  id="header" class="navbar navbar-default">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Misha Milovidov</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">

        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/resume')}}">Resume</a></li>
            <li><a href="{{URL::to('/about')}}">About</a></li>
        </ul>

        </div>

    </div>
</nav>