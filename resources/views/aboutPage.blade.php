@extends('main')

@section('content')
 {{-- start home page --}}
<section class="home">
    <div class="container">
        <div class="row d-flex align-items-center" style="height: 50vh">
            <div class="col-lg-6 col-md-12">
                <h1 class="text-white fs-7 animate__animated animate__fadeInUp">About Us</h1>
            </div>
        </div>
    </div>
</section>
{{-- end home page --}}

{{-- start Schiler --}}
<section class="pt-6">
    <div class="container">
        <div class="text-white text-center">
            <h2>This is Schilers. Awesome Food Theme. </h2>
            <h2>Purchase it and eat Burgers.</h2>
        </div>
        <div class="row d-flex align-items-center mt-6">
            <div class="col-lg-6 col-sm-12 px-4">
                <h4 class="text-warning">This is Schilers. Awesome Food Theme.</h4>
                <h4 class="text-warning pb-4">Purchase it and eat Burgers.</h4>
                <p class=" text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehen derit in voluptate velit esse cillum.</p>
                <p class=" text-white">Consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute dolor in reprehen derit in voluptate velit esse cillum.</p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="{{ asset('image/cake.jpg') }}" style="height:400px" class="px-lg-5 pt-3 px-md-5 pan-sm">
            </div>
        </div>
    </div>
</section>
{{-- end Schiler --}}

 {{-- start review section --}}
<section class="pt-6">
    <div class="container">
        <h1 class="text-white text-center">Food Lover's Say</h1>
        <div class="row pt-5">
            <div class=" col-lg-4 col-md-6 col-sm-12">
                <div class="mb-4 p-5 border border-dark-subtle border-opacity-10 my-3">
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="fs-4 text-white pt-4">"Consectetur adipiscing elit, sed do eiusmod tempor dunt ulter labore et dolore magna.</p>
                    <div class="d-flex py-4" style="height:30px">
                        <img src="{{ asset('image/customer1.jpg') }}" class="customer-logo">
                        <p class="text-white pt-3 ps-3">Wilma Mumduya</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 ">
                <div class="mb-4 p-5 border border-dark-subtle border-opacity-10 my-3">
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="fs-4 text-white pt-4">"Consectetur adipiscing elit, sed do eiusmod tempor dunt ulter labore et dolore magna.</p>
                    <div class="d-flex py-4" style="height:30px">
                        <img src="{{ asset('image/customer2.jpg') }}" class="customer-logo">
                        <p class="text-white pt-3 ps-3">Wilma Mumduya</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 ">
                <div class='mb-4 p-5 border border-dark-subtle  border-opacity-10 my-3'>
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="fs-4 text-white pt-4">"Consectetur adipiscing elit, sed do eiusmod tempor dunt ulter labore et dolore magna.</p>
                    <div class="d-flex py-4" style="height:30px">
                        <img src="{{ asset('image/customer3.webp') }}" class="customer-logo">
                        <p class="text-white pt-3 ps-3">Wilma Mumduya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end review --}}

{{-- start blog section --}}
<section class="pt-6">
    <div class="d-flex justify-content-between px-lg-5 px-sm-5">
        <h1 class="text-warning">Our Blogs</h1>
        <button class="btn btn-online">MORE BLOG</button>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 d-md-flex pt-5 d-sm-block">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('image/cake8.webp') }}" class="" style="width:100%;height:400px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-4 border border-opacity-10 border-start-0">
                        <div class="w-100">
                            <h4 class=" fw-bolder text-warning pb-3">Tomato, black olive, feta & anchovy tart ulla mco laboris</h4>
                            <p class="text-white pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip.</p>
                            <p class="link text-warning">LEARN MORE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 d-lg-flex pt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ asset('image/cake9.webp') }}" class="" style="width:100%;height:400px">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-4 border border-opacity-10 border-start-0">
                        <div class="w-100">
                            <h4 class=" fw-bolder text-warning pb-3">Tomato, black olive, feta & anchovy tart ulla mco laboris</h4>
                            <p class="text-white pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip.</p>
                            <p class="link text-warning">LEARN MORE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end blod section --}}

{{-- start pancake page --}}
<section class="pt-6">
    <div class="container">
        <div class="text-center">
            <h1 class="text-white">Follow us on Instagram</h1>
            <button class="btn btn-constant mt-4"><i class="fa-brands fa-instagram pe-3"></i>CakeShop</button>
        </div>
        <div class="pt-6 mx-md-4">
            <div class="row">
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="{{ asset('image/cake1.webp') }}" class="mx-sm-2 pb-4 pan pan-sm">
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="{{ asset('image/cake2.webp') }}" class="mx-sm-2 pb-4 pan pan-sm">
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="{{ asset('image/cake3.webp') }}" class="mx-sm-2 pb-4 pan pan-sm">
                </div>
               <div class=" col-lg-3 col-md-6 col-sm-12">
                 <img src="{{ asset('image/cake111.webp') }}" class="mx-sm-2 pb-4 pan pan-sm">
               </div>
            </div>
        </div>
    </div>
</section>
{{-- end pancake page --}}

@endsection
