
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">

{{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">

</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: linear-gradient(5deg, #ed6662, rgb(246,179,177) 33%, white);">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="{{asset('img/logo.png')}}" width="142" height="58">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" id="nav-admin-post" href="hi"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(238, 102, 98);">Admin Post</span></span></a></li>
                <li class="nav-item"><a class="nav-link" id="nav-testimonials" href="#"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(238, 102, 98);">Testimonials</span>&nbsp;</span></a></li>
                <li class="nav-item"><a class="nav-link" id="nav-educational-contents" href="#"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(238, 102, 98);">Educational Contents&nbsp;</span></span></a></li>
                <li class="nav-item"><a class="nav-link" id="nav-educational-videos" href="#"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(237, 102, 98);">Educational Videos&nbsp;</span></span></a></li>
                <li class="nav-item"><a class="nav-link" id="nav-achievements" href="#"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(237, 102, 98);">Achievements</span></span></a></li>
                <li class="nav-item"><a class="nav-link" id="nav-contacts" href="#"><i class="fas fa-table" style="color: #ed6662;"></i><span><span style="color: rgb(237, 102, 98);">Contacts&nbsp;</span></span></a></li>
            </ul>
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="background: #ed6662;"></button>
            <div class="text-center d-none d-md-inline"></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content" style="background: linear-gradient(6deg, #ed6662, white);">
            <nav class="navbar navbar-expand bg-white shadow mb-4 topbar">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: #ed6662;border-color: #ed6662;"><i class="fas fa-search"></i></button></div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light border-0 form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></div>
                                </form>
                            </div>
                        </li>
{{--            MENU--}}
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">{{ auth('admin')->user()->name }}</span><img class="border rounded-circle img-profile" src="{{asset('dashboard/img/avatars/avatar1.jpeg')}}"></a>
                                <div class="dropdown-menu" style="margin-left: -75px; bs-link-hover-color: #f13e3e; bs-link-color: #ed6662;"><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Posts</a><div class="dropdown-divider"></div><a class="dropdown-item" href="/educ">Learn More</a><a class="dropdown-item" href="/achievements">Achievements</a><a class="dropdown-item" href="/testimonials">Testimonials</a><a class="dropdown-item" href="/about">About Us</a><a class="dropdown-item" href="/contactus">Contact Us</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><form method="POST" action="{{ route('admin.logout') }}">
                                            @csrf

                                            <x-responsive-nav-link :href="route('admin.logout')"
                                                                   onclick="event.preventDefault();
                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                        {{ session()->get('success') }}
                    </div>
                @endif


{{--                        insert here--}}
{{--                <div id="admin-post" class="dash-component"><x-dash-admin-post/></div>--}}
                <div id="testimonials" class="dash-component" style="display:none;"><x-admin.dashboard.dash-testimonials/></div>
                <div id="educational-contents" class="dash-component" style="display:none;"><x-admin.dashboard.dash-books :books="$books"/></div>
                <div id="educational-videos" class="dash-component" style="display:none;"><x-admin.dashboard.dash-videos/></div>
                <div id="achievements" class="dash-component" style="display:none;"><x-admin.dashboard.dash-achievements/></div>
                <div id="contacts" class="dash-component" style="display:none;"><x-admin.dashboard.dash-contacts/></div>

{{--                {!! $dash_books !!}--}}


{{--                end--}}
            </div>
            <div class="m-4">


            </div>
        </div>
        <x-dashboard_footer/>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src=" url('https://code.jquery.com/jquery-3.6.0.min.js')"></script>

{{--<script src="{{ asset('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('dashboard/js/theme.js') }}"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/vanilla-zoom.js') }}"></script>
{{--<script src="{{ asset('js/theme.js') }}"></script>--}}


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Hide all components except the first one
        const components = document.querySelectorAll('.dash-component');
        components.forEach((comp, index) => {
            if (index !== 0) {
                comp.style.display = 'none';
            }
        });

        // Add click event listeners to the nav links
        document.getElementById('nav-admin-post').addEventListener('click', function () {
            showComponent('admin-post');
        });
        document.getElementById('nav-testimonials').addEventListener('click', function () {
            showComponent('testimonials');
        });
        document.getElementById('nav-educational-contents').addEventListener('click', function () {
            showComponent('educational-contents');
        });
        document.getElementById('nav-educational-videos').addEventListener('click', function () {
            showComponent('educational-videos');
        });
        document.getElementById('nav-achievements').addEventListener('click', function () {
            showComponent('achievements');
        });
        document.getElementById('nav-contacts').addEventListener('click', function () {
            showComponent('contacts');
        });

        function showComponent(componentId) {
            components.forEach(comp => {
                comp.style.display = 'none';
            });
            document.getElementById(componentId).style.display = 'block';
        }
    });
</script>
</body>

</html>
