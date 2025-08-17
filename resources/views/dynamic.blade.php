@extends('layout.baseview')
@section('title','Login')
@section('style')
{{-- @include('dynamic') --}}
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
                        <a href="{{url('page/team')}}" class="nav-item nav-link text-black">Team</a> --}}
                        <a href="{{url('') }}" class="navbar-brand d-none d-md-block">
                            <img class="rounded" src="/assets/images/logo.png"  alt="Brand Logo">
                        </a>
                        {{-- @foreach($pages as $page)
                            <a href="{{url('page/'.$page->slug)}}" class="nav-item nav-link text-black active">{{$page->name}}</a>
                        @endforeach --}}
                        @foreach($pages as $page)
                            <a href="{{ url('page/'.$page->slug) }}" 
                            class="nav-item nav-link text-black {{ Request::segment(2) == $page->slug ? 'active' : '' }}">
                                {{ $page->name }}
                            </a>
                        @endforeach

                        {{-- <a href="{{url('page/about-us')}}" class="nav-link text-black">About Us</a>
                        <a href="{{url('page/contact-us')}}" class="nav-item nav-link text-black">Contact Us</a>    --}}
                        <a href="{{url('login') }}" class="nav-item nav-link text-black text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="m-5">
        {!! isset($data->html)?$data->html : 'Page Not Found' !!}
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="{{ asset('assets/images/logo.png') }}" height="30px" alt="logo" class="bg-white rounded-circle">
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
