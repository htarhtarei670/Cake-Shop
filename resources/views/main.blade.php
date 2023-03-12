<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cake Shop</title>
    {{-- Css bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Fontaweasome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Css link --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google font import --}}
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Poiret+One&display=swap');
    </style>
    {{-- animate css link --}}
     <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />

</head>
<body>
    {{-- start heading bar --}}
    <div class="main-container">
        <div class="container-fluid pt-5">
            <div class="d-flex justify-content-between">
                <div class="ms-5 text-white d-lg-block d-none">
                  <i class="fa-brands fa-facebook pe-3"></i>
                  <i class="fa-brands fa-instagram pe-3"></i>
                  <i class="fa-brands fa-twitter pe-3"></i>
                </div>
                <div class="d-flex justify-content-center">
                  <img src="{{ asset("image/cake4.webp") }}" class="d-lg-block d-none">
                </div>
                <div class="me-5 d-lg-block d-none">
                  <button class="btn btn-outline-warning px-5 py-3">Call Us +95 786507670</button>
                </div>
            </div>
        </div>
        {{-- end heading bar --}}
         {{-- start nav --}}
        <nav class="navbar navbar-expand-lg sticky-top py-3 bg-black">
          <div class="container-fluid">
            <img src="{{ asset("image/cake4.webp") }}" class="d-lg-none d-flex">
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('cake#home') }}" class=" text-decoration-none txt link fs-6 me-5 fw-bolde nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cake#cakePage') }}" class=" text-decoration-none txt link fs-6 me-5 fw-bolder nav-link">CAKES</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cake#aboutPage') }}" class=" text-decoration-none txt link fs-6 me-5 fw-bolder nav-link">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cake#blog') }}" class=" text-decoration-none txt link fs-6 me-5 fw-bolder nav-link">BLOG</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cake#contact') }}" class=" text-decoration-none txt link fs-6 me-5 fw-bolder nav-link">CONTACT</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

         @yield('content')

        {{-- start footer --}}
        <section class="pt-6">
            <div class="container">
                <div class="row d-flex justify-content-between border-opacity-10 border-bottom pb-5">
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('image/cake4.webp') }}">
                    </div>
                    <div class="col-lg-6 col-md-12 text-white">
                        <a href="" class="link text-decoration-none">HOME</a>
                        <a href="" class="link text-decoration-none ms-4">CAKES</a>
                        <a href="" class="link text-decoration-none ms-4">ABOUT</a>
                        <a href="" class="link text-decoration-none ms-4">BLOG</a>
                        <a href="" class="link text-decoration-none ms-4">CONTACT</a>
                    </div>
                </div>
                <div class="row pt-5 pb-6 border-opacity-10 border-bottom">
                    <div class="col-lg-6 col-md-12">
                        <p class="text-white fw-semibold pbn">Consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore</p>
                        <p class="text-white fw-semibold pbn">magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco</p>
                        <p class="text-white fw-semibold pe-5 pb-5">laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="">
                            <button class="btn btn-constant me-2 mt-2"><i class="fa-brands fa-instagram pe-3"></i>Intragram</button>
                            <button class="btn btn-constant me-2 mt-2"><i class="fa-brands fa-facebook pe-3"></i>Fackebook</button>
                            <button class="btn btn-constant me-2 mt-2"><i class="fa-brands fa-twitter pe-3"></i>Twitter</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 mt-4">
                       <div class="text-white">
                            <i class="fa-solid fa-location-arrow fs-0"></i>
                            <h4 class="text-warning pt-3">Location</h4>
                            <p class="pt-2 pbn">4736 Poe Lane, HOT</p>
                            <p>SPRINGS, Montana-59845</p>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-12 mt-4">
                         <div class="text-white">
                                <i class="fa-solid fa-phone fs-0"></i>
                                <h4 class="text-warning pt-3">Contact</h4>
                                <p class="pt-2 pbn">+95786507607</p>
                                <p>contact@cakeshop.com</p>
                           </div>
                    </div>
                </div>
                <p class="text-white text-center pt-4 pb-2 fs-6">Copyright ©2023 All rights reserved | This template is made with <i class="fa-solid fa-heart text-warning"></i> by Colorlib</p>
            </div>
        </section>
        {{-- end footer --}}
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
