<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('dj/img/logokubirub.svg')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('404page')}}">Scores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('404page')}}">Updates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">
                    About
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('howto')}}">How to</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('privacy')}}">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('support')}}">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{route('companysigin')}}">
                <button type="button" class="btn profile">Company Profile</button>
            </a>
            <a href="{{route('company')}}">
                <button type="button" class="btn new">New Company</button>
            </a>
        </form>
    </div>
</nav>
