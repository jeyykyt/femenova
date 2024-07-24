<nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar" style="height: 100px;">
    <div class="container"><img src="{{ asset('img/logo.png') }}" width="119" height="60" style="width: 120px;">
        <div class="row justify-content-right row-cols-md-1" style="text-align: center;width: 330px;margin: 0px;margin-left: 0;--bs-link-hover-color: #f13e3e; --bs-highlight-color: #ed6662;">
            <div class="col-sm-3 col-md-8 col-lg-5 offset-sm-3 offset-md-2 offset-lg-0" style="width: 120px;margin: 0px;padding: 0px;">
                <h5 class="row-cols-sm-1" style="width: 120px;">Welcome,&nbsp;</h5>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-7 offset-sm-3 offset-lg-2" style="width: 165px;margin-left: 0px;">
                <h5 class="row-cols-sm-1" style="text-align: left; width: 300px">{{ Auth::user()->name }}</h5>
            </div>
        </div>
        <div class="dropdown"><a class="dropdown-toggle text-warning" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="--bs-body-color: var(--bs-navbar-color);color: rgb(0,0,0);bs-link-hover-color: #f13e3e;bs-link-color: #ed6662;--bs-warning: #f13e3e;--bs-warning-rgb: 241,62,62;"><strong>MENU</strong></a>
            <div class="dropdown-menu" style="margin-left: -75px; bs-link-hover-color: #f13e3e; bs-link-color: #ed6662;"><a class="dropdown-item" href="{{ route('blogUser.show') }}">My Blogs</a><a class="dropdown-item" href="{{ route('dashboard') }}">User Blogs</a><a class="dropdown-item" href="{{ route('blog-admin') }}">Admin Blogs</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#"></a><a class="dropdown-item" href="/educ">Learn More</a><a class="dropdown-item" href="{{ route('achievements') }}">Achievements</a><a class="dropdown-item" href="/testimonials">Testimonials</a><a class="dropdown-item" href="/about">About Us</a><a class="dropdown-item" href="/contactus">Contact Us</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form></a>
            </div>
        </div>
    </div>
</nav>


