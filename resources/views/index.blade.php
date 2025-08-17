@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        {{-- <a href="{{url('page/home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{url('page/team')}}" class="nav-item nav-link text-black">Team</a>
                        
                        <a href="{{url('page/about-us')}}" class="nav-link text-black">About Us</a>
                        <a href="{{url('page/contact-us')}}" class="nav-item nav-link text-black">Contact Us</a> --}}
                        <a href="{{url('') }}" class="navbar-brand d-none d-md-block">
                            <img class="rounded" src="{{asset('assets/images/logo.png')}}"  alt="Brand Logo">
                        </a>
                        @foreach($pages as $page)
                            <a href="{{ url('page/'.$page->slug) }}" class="nav-item nav-link text-black {{ $page->slug == 'home' ? 'active' : '' }}">
                                {{ $page->name }}
                            </a>
                        @endforeach


                        <a href="{{url('login') }}" class="nav-item nav-link text-black text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                        {{-- above is comment out by me temporarily --}}
                    </div>
                </div>
            </div>
        </nav>
        <main class="m-5">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" ></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" ></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" ></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" ></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" ></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" ></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/459916810.jpg?k=fa8a20dd398ef128ed88f0e22b8fc9104fdaf9046a48d07fc452aa8e6c5479b5&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 1" style="max-height: 80vh;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/459918291.jpg?k=ec385be56f7c94630ff7d6d863489e24b02d592fef17cc19c62d7c3c8966aa2c&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 2" style="max-height: 80vh;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/459918290.jpg?k=56d11c687fe956954d9f2bc367381784d6ed765169215212bf717a33159547c5&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 3" style="max-height: 80vh;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/587102704.jpg?k=e2f5ef66d94c23951d69b028b0797ad693b2ed4392fb5e58bb51292547e2f1eb&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 4" style="max-height: 80vh;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/587102706.jpg?k=276b3291a8dede3a86eb9be763eecbe5d4a6ddcb9a84eea419a576a6ee4f787a&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 5" style="max-height: 80vh;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/587102708.jpg?k=bbcb927bd7c37a1d518909899267a135cc5101c3f5b452cb0545d72f1d775eff&o=" loading="lazy" class="d-block w-100 rounded-pill" alt="Carousel 6" style="max-height: 80vh;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        
            <!-- About Us -->
            <section class="container my-5" id="about-us">
                <h6 class="display-5 text-center fw-bold mb-5">About Arowana Divine</h6>
                <div class="row align-items-center g-4">
                    <div class="col-md-6">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/587102708.jpg?k=bbcb927bd7c37a1d518909899267a135cc5101c3f5b452cb0545d72f1d775eff&o=" class="img-fluid rounded-3 shadow" alt="Hotel Interior">
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted fs-5">
                            Nestled in the heart of the city, Arowana Divine offers a luxurious escape with a blend of modern architecture and timeless elegance. Our hotel is designed to make you feel at home, whether you're here for business or leisure.
                        </p>
                        <p>
                            With a curated mix of deluxe suites, serene lounges, and fine dining, our property is more than just a stay—it’s an experience. Immerse yourself in the comfort of our spacious rooms and world-class amenities.
                        </p>
                    </div>
                </div>
        
                <!-- Unique Points -->
                <div class="row text-center mt-5">
                    <h6 class="display-6 fw-semibold mb-4">Why Guests Love Us</h6>
                    <div class="col-md-4">
                        <i class="bi bi-stars icon-lg text-warning"></i>
                        <p class="fw-semibold mt-2">Award-Winning Comfort</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-tree icon-lg text-success"></i>
                        <p class="fw-semibold mt-2">Serene Garden Views</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-wifi icon-lg text-primary"></i>
                        <p class="fw-semibold mt-2">High-Speed Connectivity</p>
                    </div>
                </div>
            </section>
        
            <!-- Team -->
            <section id="team" class="container my-5">
                <h6 class="display-5 text-center fw-bold mb-5">Meet Our Team</h6>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Raj Singh">
                            <div class="card-body">
                                <h4 class="card-title">Raj Singh</h4>
                                <p class="card-text text-muted">General Manager with over 15 years in luxury hospitality.</p>
                                <div>
                                    <i class="bi bi-facebook m-2"></i>
                                    <i class="bi bi-instagram m-2"></i>
                                    <i class="bi bi-linkedin m-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.yk32FEqFcdkHoqDXNnWkMgHaHk?w=156&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Anika Mehra">
                            <div class="card-body">
                                <h4 class="card-title">Anika Mehra</h4>
                                <p class="card-text text-muted">Guest Relations expert ensuring every stay is memorable.</p>
                                <div>
                                    <i class="bi bi-facebook m-2"></i>
                                    <i class="bi bi-instagram m-2"></i>
                                    <i class="bi bi-linkedin m-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.oZRlW7Flyd-U3gN1a6gepAHaHa?w=161&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Vikram Patel">
                            <div class="card-body">
                                <h4 class="card-title">Vikram Patel</h4>
                                <p class="card-text text-muted">Executive Chef known for culinary innovation and finesse.</p>
                                <div>
                                    <i class="bi bi-facebook m-2"></i>
                                    <i class="bi bi-instagram m-2"></i>
                                    <i class="bi bi-linkedin m-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Contact -->
            {{-- <section id="contact" class="container my-5">
                <h6 class="display-5 text-center fw-bold mb-5">Contact Us</h6>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="bg-white rounded shadow p-4">
                            <p class="fs-4 text-muted">Reach out to us</p>
                            <p><strong>Email:</strong> reservations@crystalhaven.com</p>
                            <p><strong>Phone:</strong> +91 98765 43210</p>
                            <p><strong>Address:</strong> Arowana Divine Hotel, HSR Layout, Bangalore, Karnataka 560102</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailid" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="emailid">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="4"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark w-100">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </main>
        
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="assets/images/logo.png" alt="logo" height="30px" class="bg-white rounded-circle">
                        <div>
                            <p class="text-white">Your journey begins with the perfect stay—discover handpicked hotels designed to fit your lifestyle. With seamless booking, personalized options, and real-time availability, we make travel easier and more inspiring than ever before.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            {{-- <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li> --}}
                            {{-- above commented by me --}}
                            <li><a href="{{url('page/home')}}" class="text-decoration-none text-white">Home</a></li>
                            <li><a href="{{url('page/team')}}" class="text-decoration-none text-white">Team</a></li>
                            <li><a href="{{url('page/about-us')}}" class="text-decoration-none text-white">About Us</a></li>
                            <li><a href="{{url('page/contact-us')}}" class="text-decoration-none text-white">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2025, CodewithAniK</p>
                    {{-- <a href="https://1stop.ai/">1Stop.ai</a></p> --}}
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection
