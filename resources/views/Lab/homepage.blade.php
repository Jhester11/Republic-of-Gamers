@extends('LabExamination-app')

@section('title')
    Home - ROG
@endsection

@section('content')
    {{-- Carousel --}}
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="8000">
                <img src="{{ asset('assets/img/carousel-1.gif') }}" style="object-fit: cover; height: 500px; width: 100%;"
                    class="d-block w-100" alt="image1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-shadow" style="color: #ffffff">Experience Innovation</h5>
                    <p style="color: #ffffff">Unleash the power of technology.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('assets/img/carousel-2.gif') }}" style="object-fit: cover; height: 500px; width: 100%;"
                    class="d-block w-100" alt="image2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-shadow" style="color: #ffffff">Cutting-Edge Performance</h5>
                    <p style="color: #ffffff">Designed for excellence.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('assets/img/carousel-3.gif') }}" style="object-fit: cover; height: 500px; width: 100%;"
                    class="d-block w-100" alt="image3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-shadow" style="color: #ffffff">Stylish and Powerful</h5>
                    <p style="color: #ffffff">Technology that defines you.</p>
                </div>
            </div>
        </div>
        <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
            <span class="visually-hidden" >Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Product --}}
    <section style="background-color: #0d0d0d; color: #fff;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5 text-danger"><strong>Bestsellers</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-dark border border-danger">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{ asset('assets/img/product/laptop-removebg-preview.png') }}" style="height: 300px;" class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal1" />
                        </div>
                        <div class="card-body">
                            <a href="#" class="text-reset">
                                <h5 class="card-title mb-3">Asus ROG</h5>
                            </a>
                            <p class="text-reset" style="text-decoration: none;">Laptop</p>
                            <h6 class="mb-3 text-danger">$61.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Modal for Laptop -->
                <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border border-danger">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="imageModalLabel1">Asus ROG - Laptop</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('assets/img/product/laptop-removebg-preview.png') }}" class="img-fluid" alt="Asus ROG Laptop">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-dark border border-danger">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/monitor-removebg-preview.png')}}" style="height: 300px;" class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal2" />
                        </div>
                        <div class="card-body">
                            <a href="#" class="text-reset">
                                <h5 class="card-title mb-3">Asus ROG</h5>
                            </a>
                            <p class="text-reset" style="text-decoration: none;">Monitor</p>
                            <h6 class="mb-3"><s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal for Monitor -->
                <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border border-danger">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="imageModalLabel2">Asus ROG - Monitor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/monitor-removebg-preview.png')}}" class="img-fluid" alt="Asus ROG Monitor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-dark border border-danger">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/motherboard-removebg-preview.png')}}" style="height: 300px;" class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal3" />
                        </div>
                        <div class="card-body">
                            <a href="#" class="text-reset">
                                <h5 class="card-title mb-3">Asus ROG</h5>
                            </a>
                            <p class="text-reset" style="text-decoration: none;">Motherboard</p>
                            <h6 class="mb-3"><s>$191.99</s><strong class="ms-2 text-danger">$90.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal for Motherboard -->
                <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border border-danger">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="imageModalLabel3">Asus ROG - Motherboard</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/motherboard-removebg-preview.png')}}" class="img-fluid" alt="Asus ROG Motherboard">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-dark border border-danger">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/mouse-removebg-preview.png')}}" style="height: 300px;" class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal4" />
                        </div>
                        <div class="card-body">
                            <a href="#" class="text-reset">
                                <h5 class="card-title mb-3">Asus ROG</h5>
                            </a>
                            <p class="text-reset" style="text-decoration: none;">Mouse</p>
                            <h6 class="mb-3"><s>$41.99</s><strong class="ms-2 text-danger">$30.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal for Mouse -->
                <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border border-danger">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="imageModalLabel4">Asus ROG - Mouse</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/mouse-removebg-preview.png')}}" class="img-fluid" alt="Asus ROG Mouse">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card bg-dark border border-danger">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/pngwing.com-removebg-preview.png')}}" style="height: 300px;" class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal5" />
                        </div>
                        <div class="card-body">
                            <a href="#" class="text-reset">
                                <h5 class="card-title mb-3">Asus ROG</h5>
                            </a>
                            <p class="text-reset" style="text-decoration: none;">System Unit</p>
                            <h6 class="mb-3"><s>$251.99</s><strong class="ms-2 text-danger">$230.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal for System Unit -->
                <div class="modal fade" id="imageModal5" tabindex="-1" aria-labelledby="imageModalLabel5" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark border border-danger">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="imageModalLabel5">Asus ROG - System Unit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/pngwing.com-removebg-preview.png')}}" class="img-fluid" alt="Asus ROG System Unit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

