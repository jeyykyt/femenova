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
 <x-styleCss/>
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

        <div class="block-heading col-md-8 col-xl-11 text-center mx-auto" style="border-color: var(--bs-link-color);">
            <h2 class="text-info" style="--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;"></h2>
        </div>

        <div class="col-md-8 col-xl-11 text-center mx-auto">
            <h2 style="color:#f13e3e;font-weight: bold;">Testimonials</h2>
            <p>Welcome to our Testimonial Page, a space dedicated to sharing the personal stories and experiences of individuals navigating their journey with Polycystic Ovary Syndrome (PCOS). Here, you'll find a collection of heartfelt testimonials from our community, offering unique insights into the challenges and triumphs faced by those living with PCOS.

                These stories provide valuable perspectives, advice, and encouragement, reminding you that you are not alone in your journey. We hope these testimonials inspire you and offer support as you explore your own path to health and well-being.

                Explore these personal accounts and connect with the experiences of others who understand the complexities of living with PCOS.</p>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3" style="background:transparent; height: 930px;">
                @if($testimonials->isEmpty())
                    <div class="alert alert-info text-center" role="alert">
                        No Testimony
                    </div>
                @else
                    @foreach($testimonials as $testimonial)
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body" style="height: 200px;">
                                    <p class="fw-bold mb-0 text-info">{{ $testimonial-> testimony_title }}</p>
                                    <p class="testimonial-content bg-body-tertiary border rounded border-0 p-4">{{ $testimonial-> content}}</p>
                                    <div class="d-flex">
                                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="{{ asset('uploads/testimonial/images/'.$testimonial-> image) }}" style="margin-right: 38px;">
                                        <div>
                                            <p class="text-muted mb-0">{{ $testimonial-> name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
