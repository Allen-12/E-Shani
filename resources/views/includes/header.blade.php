<!-- Navigation -->
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-info"  color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a href="/"><img src="{{URL::to('logo.png')}}"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="{{ route("register") }}" class="btn btn-primary btn-round">Sign up</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("login") }}" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
