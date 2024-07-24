<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Brand</title>
    <meta name="description"
          content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">
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
    <section class="clean-block clean-blog-list dark"
             style="background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);">


        <div class="container">

            <div class="block-heading">
                <h2 class="text-info">My Blogs</h2>

            </div>
            <div class="block-content"
                 style="background: transparent">
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col">

                            <div class="card"
                                 style="border-color: var(--bs-info);border-right-color: rgba(237,102,98,0);border-bottom-color: rgba(237,102,98,0);border-left-color: rgba(237,102,98,0);">
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

                                <div class="card-body border-info" style="border-color: var(--bs-link-color);">
                                    <section class="position-relative py-4 py-xl-5">
                                        <div class="container position-relative">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-1 col-xl-1">
                                                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-0"
                                                         style="margin-top: 0px;width: 60px;height: 60px;background: linear-gradient(black 26%, white);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                             fill="currentColor" viewBox="0 0 16 16"
                                                             class="bi bi-person" style="font-size: 33px;">
                                                            <path
                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-9 col-xxl-7">
                                                    <h3 class="justify-content-center"
                                                        style="width: 300px;margin-top: 15px;text-align: left;margin-bottom: 0px;padding-top: 1px;">{{ Auth::user()->name }}</h3>
                                                </div>
                                                <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9"
                                                     style="width: 770px;">
                                                    <div>

                                                        <form class="p-3 p-xl-4" method="post"
                                                              action="{{ route('blogUser.store') }}">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" id="title"
                                                                       name="title" placeholder="Enter title" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="content">Content</label>
                                                                <textarea class="form-control" id="content"
                                                                          name="content" rows="6"
                                                                          placeholder="Do you have something to share with us?"
                                                                          style="margin-bottom: 10px;"
                                                                          required></textarea>
                                                            </div>
                                                            <div class="form-check" style="width: 400px;">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="formCheck-1" name="anonymous">
                                                                <label class="form-check-label" for="formCheck-1"
                                                                       style="font-size: 14px;">Anonymous?</label>
                                                            </div>
                                                            <button class="btn link-light d-block w-25 btn-info btn-xs"
                                                                    type="submit">Post
                                                            </button>
                                                            <div></div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;" method="GET" action="{{ route('myBlogs.view.search') }}">
                    <div class="input-group" style="width: 300px;">
                        <input class="form-control" type="search" name="query" placeholder="Search for...">
                        <button class="btn btn-primary py-0" type="submit" style="background: rgb(237,102,98);"><i class="fas fa-search"></i></button>
                    </div>
                </form>

                <div class="mt-5">
                    @if($blog_users->isEmpty())
                        <div class="alert alert-info text-center" role="alert">
                            No Blogs
                        </div>
                    @else
                        @foreach($blog_users as $blog_user)
                            <div class="card mb-3">

                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">{{ $blog_user->title }}</h4>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-sm p-0 me-2" data-bs-toggle="modal"
                                           data-bs-target="#editBlogUserModal-{{ $blog_user->id }}"
                                           style="line-height: 2; margin-top:2px">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="btn btn-sm p-0 me-2" data-bs-toggle="modal"
                                           data-bs-target="#deleteBlogUserModal-{{ $blog_user->id }}"
                                           style="line-height: 2; margin-top:2px">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </div>
                                </div>

                                <!-- Edit Modal -->
                                @include('userBlog.user-edit', ['blogUser' => $blog_user])

                                <!-- Delete Modal -->
                                @include('userBlog.user-delete', ['blogUser' => $blog_user])

                                <div class="card-body">
                                    <p>{{ $blog_user->content }}</p>
                                    <small>Posted by
                                        <span
                                            style="color: #ed6662;">{{ $blog_user->anonymous ? 'Anonymous' : $blog_user->user->name }}</span>
                                        on {{ $blog_user->created_at->diffForHumans() }}
                                    </small>
                                </div>
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
