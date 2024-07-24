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

    <section class="clean-block clean-blog-list dark" style="background: linear-gradient(3deg, #ed6662, rgb(240,129,126) 14%, rgb(249,204,203) 75%, white 96%);">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Admin's Blog</h2>
            </div>
            <div class="block-content" style="border-style: inherit;border-color: var(--bs-info);color: rgba(33,37,41,0);background: rgba(255,255,255,0);">
                <div class="clean-blog-post">
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;" method="GET" action="{{ route('blog-admin.view.search') }}">
                        <div class="input-group" style="width: 300px;">
                            <input class="form-control" type="search" name="query" placeholder="Search for...">
                            <button class="btn btn-primary py-0" type="submit" style="background: rgb(237,102,98);"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <div class="row">
                        <div class="mt-5">
                            @if($blog_admins->isEmpty())
                                <div class="alert alert-info text-center" role="alert">
                                    No admin blogs
                                </div>
                            @else
                                @foreach($blog_admins as $blog_admin)
                                    <div class="card" style="margin-bottom: 20px; padding: 12px; border-color: var(--bs-info);border-right-color: rgba(237,102,98,0);border-bottom-color: rgba(237,102,98,0);border-left-color: rgba(237,102,98,0);">
                                        <div class="card-header">
                                            <h4>{{ $blog_admin->title }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $blog_admin->content }}</p>
                                            <small>Posted by Admin on {{ $blog_admin->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
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
