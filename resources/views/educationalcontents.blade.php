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
        <div class="container py-4 py-xl-5 justify-content-center">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-11 text-center mx-auto">
                    <h2 style="color:#f13e3e;font-weight: bold;">Educational Contents</h2>
                    <p class="center-justify">
                        Welcome to our Education Contents where you'll find a carefully curated selection of books and resources dedicated to empowering women with knowledge about <span class="highlight">Polycystic Ovary Syndrome (PCOS)</span>. Here, we provide you with a wealth of information to better understand and manage your PCOS journey.
                        <br><br>
                        Explore our collection to discover expert insights, practical tips, and personal stories from those who have navigated similar experiences. Whether you're seeking guidance on lifestyle changes, treatment options, or simply want to deepen your understanding of PCOS, our educational content is here to support you every step of the way.
                    </p>
                </div>
            </div>
            @if($books->isEmpty())
                <div class="alert alert-info" role="alert">
                    No Educational Contents
                </div>
            @else
                <div class="row gy-4 row-cols-1 row-cols-md-2 content-center">
                    @foreach($books as $book)
                        <div class="col">
                            <div class="d-flex flex-column flex-lg-row">
                                <img class="rounded img-fluid fixed-size-img" src="{{ asset('uploads/book/images/'.$book->image) }}">
                                <div class="py-4 py-lg-0 px-lg-4">
                                    <h3>{{ $book->book_title }}</h3>
                                    <p style="margin-bottom: 2px;">{{ $book->authors_name }}</p>
                                    <p style="font-size: 14px; margin-bottom: 2px">
                                        {{ $book->date_published ? \Carbon\Carbon::parse($book->date_published)->format('d/m/Y') : 'Unknown' }}
                                    </p>
                                    <a style="font-size: 14px;" href="{{ $book->book_link }}" target="_blank">link here</a>
                                    <p>
                                        @if(strlen($book->description) > 100)
                                            <span class="truncate">{{ Str::limit($book->description, 100) }}</span>
                                            <span class="full-text" style="display: none;">{{ Str($book->description, 100) }}</span>
                                            <span class="show-more" style="color: #ed6662; cursor: pointer;">Show more</span>
                                        @else
                                            {{ $book->description }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-custom mt-6" style="margin-left:1000px">
                    {{ $books->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>

        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-11 text-center mx-auto">
                    <h2 style="color:#f13e3e;font-weight: bold;">Educational Videos</h2>
                    <p class="center-justify">
                        Educational Videos section, where we bring you an engaging array of video content designed to empower and inform you about <span class="highlight">Polycystic Ovary Syndrome (PCOS)</span>. Our expertly curated videos offer valuable insights into PCOS management, lifestyle tips, and the latest research findings.
                    </p>
                </div>
            </div>
            @if($videos->isEmpty())
                <div class="alert alert-info text-center" role="alert">
                    No Educational Videos
                </div>
            @else
                <div class="row gy-4 row-cols-1 row-cols-md-2">
                    @foreach($videos as $video)
                        <div class="col">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="py-4 py-lg-0 px-lg-4">
                                    <iframe allowfullscreen frameborder="0" width="560" height="315" style="width: 100%; height: 200px;" src="{{ $video->video_link }}"></iframe>
                                    <h4>{{ $video->video_title }}</h4>
                                    <p>{{ $video->speakers_name }}</p>
                                    <p>
                                        @if(strlen($video->description) > 100)
                                            <span class="truncate">{{ Str::limit($video->description, 100) }}</span>
                                            <span class="full-text" style="display: none;">{{ Str($video->description, 100) }}</span>
                                            <span class="show-more" style="color: #ed6662; cursor: pointer;">Show more</span>
                                        @else
                                            {{ $video->description }}
                                        @endif
                                    </p>                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-custom mt-6" style="margin-left:1000px">
                    {{ $videos->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </section>
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
                const truncateText = fullText.previousElementSibling;
                if (fullText.style.display === "none") {
                    fullText.style.display = "inline";
                    truncateText.style.display = "none";
                    this.textContent = "Show less";
                } else {
                    fullText.style.display = "none";
                    truncateText.style.display = "inline";
                    this.textContent = "Show more";
                }
            });
        });
    });
</script>
<x-footer/>
</body>

</html>
