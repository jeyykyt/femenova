<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Brand</title>
    <meta name="description" content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}">

</head>

<body>
<x-userheader/>
<main class="page">
    <section class="clean-block clean-blog-list dark" style="background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);">


        <div class="container">

            <div class="block-heading">

                <h2 class="text-info">User's Blog</h2>

            </div>

            <x-blogs.user-store/>
            <div class="col">
                @if(session()->has('success'))
                    <div class="alert alert-success mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('delete'))
                    <div class="alert alert-danger mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                        {{ session()->get('delete') }}
                    </div>
                @endif

            </div>
            <div class="block-content" style="background:transparent">
                <div class="clean-blog-post">

                    <div class="row">

                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;" method="GET" action="{{ route('blogUser.view.search') }}">
                            <div class="input-group" style="width: 300px;">
                                <input class="form-control" type="search" name="query" placeholder="Search for...">
                                <button class="btn btn-primary py-0" type="submit" style="background: rgb(237,102,98);"><i class="fas fa-search"></i></button>
                            </div>
                        </form>

                        <button class="btn btn-primary" type="button" style="background: #ed6662; width: 100px; height: 35px; margin-top: -37px; padding-right: 5px; margin-right: 0px; padding-left: 5px; margin-left: 987px; border-color: #ed6662;" data-bs-toggle="modal" data-bs-target="#storeBlogUserModal">
                            Add&nbsp;<i class="far fa-plus-square" style="font-size: 17px;"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-5">
                    @if($blog_users->isEmpty())
                        <div class="alert alert-info text-center" role="alert">
                            No Blogs
                        </div>
                    @else
                        @foreach($blog_users as $blog_user)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h4>{{ $blog_user->title }}</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{ $blog_user->content }}</p>
                                    <small>Posted by
                                        <span style="color: #ed6662;">{{ $blog_user->anonymous ? 'Anonymous' : $blog_user->user->name }}</span>
                                        on {{ $blog_user->created_at->diffForHumans() }}
                                    </small>                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>


            </div>
        </div>
    </section>
</main>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/vanilla-zoom.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>

<x-footer/>
</body>

</html>
