<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/avatar.jpg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                
                <p class="h-30 mt-2 bold">Samin Yasar</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{  request()->routeIs('home') ? 'active' : ''
                        }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{  request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{  request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{  request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{  request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content'
    )


    <!-- Footer -->
    <footer class=" bg-dark text-white py-4 mt-5">
        <div class="container  ">
            <div class="row">
                <div class="col-md-4">
                    <h4>Location </h4>
                    <p>house#1, Road#2 <br> Block#A, Mirpur-1 <br> Dhaka-1216</p>
                    <p></p>
                    <iframe class="img-fluid rounded-4 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.702490576647!2d90.35385844999999!3d23.794562699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2zTWlycHVyLTEsIOCmouCmvuCmleCmvg!5e0!3m2!1sbn!2sbd!4v1747043326749!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    

                    
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email:+8801525251
                        

                </p></div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a class="btn btn-primary" href="#">Facebook</a>
                    <a class="btn btn-primary" href="#">Instagram</a>
                    <a class="btn btn-primary" href="#">Twitter</a>


                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('scripts')

</body>
</html>