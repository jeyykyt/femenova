<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar">
    <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <a href="/" ><img src="{{asset('img/logo.png')}}" width="119" height="60"></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-warning" href="/educ" style="padding-right: 2px;padding-left: 2px;--bs-info: #ed6662;--bs-info-rgb: 237,102,98;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;">Learn more!</a></li>
                <li class="nav-item" style="margin-top: 4px;">
                    <div class="nav-item dropdown" style="padding: 0px;"><a class="dropdown-toggle text-warning" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;font-size: 12.8px;"><strong>BLOGS</strong></a>
                        <div class="dropdown-menu" style="margin-left: -100px;"><a class="dropdown-item" href="/login">User Blogs</a><a class="dropdown-item" href="/login">Admin Blogs</a></div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link text-warning" href="/testimonials" style="padding: 8px 2px;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link active text-warning" href="{{ route('achievements') }}" style="padding: 8px 2px;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;">Achievements</a></li>
                <li class="nav-item"><a class="nav-link active text-warning" href="/about" style="padding: 8px 2px;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;">About Us</a></li>
                <li class="nav-item"><a class="nav-link active text-warning" href="/contactus" style="padding: 8px 2px;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;">Contact Us</a></li>
                <li class="nav-item" style="padding: 0px;text-align: left;">
                    <div class="nav-item dropdown" style="margin-top: 4px;"><a class="dropdown-toggle text-warning" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;font-family: Montserrat, sans-serif;font-size: 12.8px;"><strong>CREATE</strong>&nbsp;<strong>ACCOUNT</strong></a>
                        <div class="dropdown-menu" style="margin-left: -25px;"><a class="dropdown-item" href="/login">Log in</a><a class="dropdown-item" href="/register">Register</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
