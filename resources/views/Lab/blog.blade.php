@extends('LabExamination-app')
@section('title')
    Blog - ROG
@endsection

<style>
body {
    background-color: #0e0e0e;
    color: #ffffff;
    font-family: 'Arial', sans-serif;
}

.card {
    background-color: #3a3a3a;
    border: none;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 30px rgba(255, 43, 43, 0.5);
}

.card-title {
    color: #ff2b2b;
    font-weight: bold;
    font-size: 1.5rem;
    margin: 20px 0;
}

.card-img-top {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.card-text {
    color: #e0e0e0;
    margin-bottom: 20px;
    font-size: 1rem;
}

.btn-danger {
    background-color: #ff2b2b;
    border-color: #ff2b2b;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-danger:hover {
    background-color: #c52020;
    transform: translateY(-2px);
}

.bg-dark {
    background-color: #1c1c1c;
}

h4 {
    color: #ff2b2b;
}

a {
    color: #ff2b2b;
}

a:hover {
    text-decoration: underline;
}

.form-control {
    background-color: #2e2e2e;
    color: #ffffff;
    border: 1px solid #ff2b2b;
    transition: border-color 0.3s ease;
}

.form-control::placeholder {
    color: #aaa;
}

.form-control:focus {
    border-color: #ff2b2b;
    outline: none;
}

.subscribe-btn {
    background-color: #ff2b2b;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.subscribe-btn:hover {
    background-color: #c52020;
    transform: translateY(-2px);
}


.post {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.post:nth-child(1) { animation-delay: 0.1s; }
.post:nth-child(2) { animation-delay: 0.2s; }
.post:nth-child(3) { animation-delay: 0.3s; }
</style>

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Post 1 -->
            <div class="card bg-dark">
                <img src="{{ asset('assets/img/post/post1.gif') }}" class="card-img-top" alt="Post 1">
                <div class="card-body">
                    <h2 class="card-title">The Best ROG Laptops of 2024</h2>
                    <p class="post-date" style="color: #ffffff;">Posted on September 30, 2024</p>
                    <p class="card-text">Explore the latest innovations in ROG laptops that cater to gamers and professionals alike.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="card bg-dark">
                <img src="{{ asset('assets/img/post/post2.jfif') }}" class="card-img-top" alt="Post 2">
                <div class="card-body">
                    <h2 class="card-title">ROG Accessories You Can't Live Without</h2>
                    <p class="post-date" style="color: #ffffff;">Posted on September 29, 2024</p>
                    <p class="card-text">A roundup of must-have accessories for every ROG enthusiast to enhance your gaming experience.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="card bg-dark">
                <img src="{{ asset('assets/img/post/post3.jfif') }}" class="card-img-top" alt="Post 3">
                <div class="card-body">
                    <h2 class="card-title">Maximizing Performance: ROG Software Guide</h2>
                    <p class="post-date" style="color: #ffffff;">Posted on September 28, 2024</p>
                    <p class="card-text">Learn how to optimize your ROG hardware with the latest software tools and updates.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="bg-dark p-4 mb-4 rounded">
                <h4>About ROG</h4>
                <p style="color: #fcfcfc;">ROG (Republic of Gamers) is a brand of the ASUS company, which focuses on high-performance gaming hardware and software.</p>
            </div>
            <div class="bg-dark p-4 mb-4 rounded">
                <h4>Categories</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none" style="color: #ffffff;">Laptops</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #ffffff;">Accessories</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #ffffff;">Gaming News</a></li>
                    <li><a href="#" class="text-decoration-none" style="color: #ffffff;">Software Tips</a></li>
                </ul>
            </div>
            <div class="bg-dark p-4 rounded">
                <h4>Subscribe to our Newsletter</h4>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <button style="color: rgb(253, 253, 253); background-color:red; width:100%;" type="submit" class="subscribe-btn btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
