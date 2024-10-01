@extends('LabExamination-app')
@section('title')
    Product - ROG
@endsection

@section('content')
    {{-- Product --}}
    <section style="background-color: #1f1f1f;">
        <div class="text-center container py-5">
            <h4 class="mt-4 mb-5" style="color: #ff4b4b;"><strong>All Products</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" style="background-color: #2e2e2e; border: 2px solid #ff4b4b;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('assets/img/product/laptop-removebg-preview.png') }}" style="height: 300px;"
                                class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal1" />
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3" style="color: #ff4b4b;">Asus ROG</h5>
                            </a>
                            <a href="" class="text-reset" style="text-decoration: none;">
                                <p style="color: #ffffff;">Laptop</p>
                            </a>
                            <h6 class="mb-3" style="color: #ff4b4b;">$61.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background-color: #2e2e2e;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel1" style="color: #ff4b4b;">Asus ROG - Laptop</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('assets/img/product/laptop-removebg-preview.png') }}" class="img-fluid"
                                    alt="Asus ROG Laptop">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" style="background-color: #2e2e2e; border: 2px solid #ff4b4b;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/monitor-removebg-preview.png')}}" style="height: 300px;"
                                class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal2" />
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3" style="color: #ff4b4b;">Asus ROG</h5>
                            </a>
                            <a href="" class="text-reset" style="text-decoration: none;">
                                <p style="color: #ffffff;">Monitor</p>
                            </a>
                            <h6 class="mb-3" style="color: #ffffff;"><s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background-color: #2e2e2e;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel1" style="color: #ff4b4b;">Asus ROG - Monitor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/monitor-removebg-preview.png')}}" class="img-fluid"
                                    alt="Asus ROG Monitor">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" style="background-color: #2e2e2e; border: 2px solid #ff4b4b;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/motherboard-removebg-preview.png')}}" style="height: 300px;"
                                class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal3" />
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3" style="color: #ff4b4b;">Asus ROG</h5>
                            </a>
                            <a href="" class="text-reset" style="text-decoration: none;">
                                <p style="color: #ffffff;">Motherboard</p>
                            </a>
                            <h6 class="mb-3" style="color: #ffffff;"><s>$191.99</s><strong class="ms-2 text-danger">$90.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background-color: #2e2e2e;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel1" style="color: #ff4b4b;">Asus ROG - Motherboard</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/motherboard-removebg-preview.png')}}" class="img-fluid"
                                    alt="Asus ROG Motherboard">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" style="background-color: #2e2e2e; border: 2px solid #ff4b4b;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/mouse-removebg-preview.png')}}" style="height: 300px;"
                                class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal4" />
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3" style="color: #ff4b4b;">Asus ROG</h5>
                            </a>
                            <a href="" class="text-reset" style="text-decoration: none;">
                                <p style="color: #ffffff;">Mouse</p>
                            </a>
                            <h6 class="mb-3" style="color: #ffffff;"><s>$41.99</s><strong class="ms-2 text-danger">$30.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background-color: #2e2e2e;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel1" style="color: #ff4b4b;">Asus ROG - Mouse</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/mouse-removebg-preview.png')}}" class="img-fluid"
                                    alt="Asus ROG Mouse">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" style="background-color: #2e2e2e; border: 2px solid #ff4b4b;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="{{asset('assets/img/product/pngwing.com-removebg-preview.png')}}" style="height: 300px;"
                                class="w-100" data-bs-toggle="modal" data-bs-target="#imageModal5" />
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3" style="color: #ff4b4b;">Asus ROG</h5>
                            </a>
                            <a href="" class="text-reset" style="text-decoration: none;">
                                <p style="color: #ffffff;">System Unit</p>
                            </a>
                            <h6 class="mb-3" style="color: #ffffff;"><s>$41.99</s><strong class="ms-2 text-danger">$20.99</strong></h6>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal5" tabindex="-1" aria-labelledby="imageModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background-color: #2e2e2e;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel1" style="color: #ff4b4b;">Asus ROG - System Unit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('assets/img/product/pngwing.com-removebg-preview.png')}}" class="img-fluid"
                                    alt="Asus ROG System Unit">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
