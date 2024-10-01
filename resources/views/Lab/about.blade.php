@extends('LabExamination-app')
@section('title')
    About Us - ROG
@endsection

<style>
    body {
        background-color: #0e0e0e;
        color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    section {
        padding: 50px 0;
    }

    h2 {
        color: #ff2b2b;
    }

    .text-muted {
        color: #aaaaaa;
    }

    .img-fluid {
        width: 100%;
        max-width: 800px;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .img-fluid:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 15px rgba(255, 43, 43, 0.5);
    }

    .rounded-3 {
        border-radius: 10px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .lead {
        animation: fadeIn 0.5s ease forwards;
        opacity: 0;
    }

    .lead:nth-child(1) {
        animation-delay: 0.2s;
    }

    .lead:nth-child(2) {
        animation-delay: 0.4s;
    }

    .row.gx-2>div {
        padding: 10px;
    }
</style>

@section('content')
    <section class="py-5">
        <div class="container" style="color: #ffffff;">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="mt-5 mt-md-0">
                        <span class="text-muted">Our Story</span>
                        <h2 class="display-5 fw-bold">About Us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris.</p>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 order-1 order-md-2">
                    <div class="row gx-2 gx-lg-3">
                        <div class="col-6">
                            <div class="mb-2"><img style="height: 350px;" class="img-fluid rounded-3"
                                    src="{{ asset('assets/img/about/Justice_Online_wallpaper .jpg') }}" alt="Image 1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img style="height: 350px;" class="img-fluid rounded-3"
                                    src="{{ asset('assets/img/about/Main-Screen-JPEG.jpg') }}" alt="Image 2"></div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img style="height: 350px;" class="img-fluid rounded-3"
                                    src="{{ asset('assets/img/about/ROG_pinball_wallpaper_1920x1080.jpg') }}"
                                    alt="Image 3"></div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img style="height: 350px;" class="img-fluid rounded-3"
                                    src="{{ asset('assets/img/about/ROG_wallpaper_G.A.M.E.R.s-Assemble!_1920x1080.jpg') }}"
                                    alt="Image 4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
