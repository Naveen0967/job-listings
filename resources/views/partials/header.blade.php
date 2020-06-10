{{--<header id="header" id="home">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center justify-content-between d-flex">--}}
{{--            <div id="logo">--}}
{{--                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" title=""/></a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="{{ route('login') }}" class="btn btn-info">Login</a>--}}
{{--                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="header" id="home">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" title=""/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default"
                aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="" title=""/>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
           
            <ul class="navbar-nav ml-lg-auto">
            @if (Auth::check())
            <li class="nav-item">
            <p style="color : white">Hi,{{Auth::user()->name}} welcome...! </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                <a class=" btn btn-warning" href="{{ route('profile') }}"> Edit Profile</a>
                    <button
                        class="btn btn-danger"
                        tyoe ="submit">
                        Logout
                    </button>
                @csrf
            </form>
            </li>
            @else
                <li class="nav-item">
                    <a
                        class="btn btn-default"
                        href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="btn btn-white"
                        href="{{ url('register?t=1') }}">
                        Register
                    </a>
                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
