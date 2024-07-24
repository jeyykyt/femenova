<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <meta name="description" content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">
</head>

<body>
@if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @if(auth()->guard('admin')->check())
            <x-adminheader />
        @elseif(auth()->check())
            <x-userheader />
        @else
            <x-publicheader />
        @endif
    </nav>
@endif
<main class="page">
    <section class="clean-block clean-post dark" style="background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);">
        <div class="container">
            <div class="block-content"></div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-11 text-center mx-auto">
                    <h2 style="color:#f13e3e;font-weight: bold;">Contact Us</h2>
                    <p class="w-lg-50"> We welcome everyone to share their journey with PCOS, recommend your books or articles, share videos about it. Your stories inspire and support our community.</p>
                </div>
            </div>

            <section class="clean-block clean-form" style="background: transparent">


                <form class="border-1" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" style="--bs-body-bg: #ffffff;--bs-secondary: #ed8080;--bs-secondary-rgb: 237,128,128;--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;color: var(--bs-emphasis-color);background: var(--bs-primary);border-color: #ed6662;">
                    @csrf
                    @if(session()->has('success'))
                        <div class="alert alert-success mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" id="name-1" name="name" data-bs-theme="light" style="background: var(--bs-primary);" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subject">Subject</label>
                        <input class="form-control" type="text" id="subject-1" name="subject" data-bs-theme="light" style="background: var(--bs-primary);" required>
                        @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email-2" name="email" data-bs-theme="light" style="background: var(--bs-primary);" required>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="file">Upload File</label>
                        <input class="form-control" type="file" id="file" name="file">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message-1">Message</label>
                        <textarea class="form-control" id="message-1" name="content" data-bs-theme="light" style="background: var(--bs-primary);" required></textarea>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-info text-bg-secondary" type="submit">Send</button>
                    </div>
                </form>
            </section>
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
