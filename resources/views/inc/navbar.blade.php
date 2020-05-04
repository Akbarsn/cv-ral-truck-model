<link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
<nav class="navbar fixed-top navbar-expand-md">
    <span class="navbar-brand">Sistem Informasi Rekrutmen</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_hmpd" aria-controls="navbar_hmpd" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color:white; font-size:24px"><i class="fas fa-list-ul"></i></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <span class="my-4 my-md-0 list">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="name">Hello {{session('name')}}</span>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/">Log Out</a>
                    </div>
                </li>
            </ul>
        </span>
    </div>
</nav>