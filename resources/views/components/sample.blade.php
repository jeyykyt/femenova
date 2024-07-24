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




        {{ $slot }}



</main>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/vanilla-zoom.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButtons = document.querySelectorAll('.show-more');

        showMoreButtons.forEach(button => {
            button.addEventListener('click', function() {
                const fullText = this.previousElementSibling;
                if (fullText.style.display === "none") {
                    fullText.style.display = "inline";
                    this.textContent = "Show less";
                } else {
                    fullText.style.display = "none";
                    this.textContent = "Show more";
                }
            });
        });
    });
</script>
<x-footer/>
</body>

</html>
