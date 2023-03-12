@extends('main')

@section('content')
{{-- start home page --}}
<section class="home">
    <div class="container">
        <div class="row d-flex align-items-center" style="height: 50vh">
            <div class="col-lg-6 col-md-12">
                <h1 class="text-white fs-7 animate__animated animate__fadeInUp">Delicious Cakes</h1>
            </div>
        </div>
    </div>
</section>

{{-- start cake design --}}
<section class="pt-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('image/cake12.jpg') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('image/cake5.webp') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('image/cake15.jpg') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('image/cake17.jpg') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <img src="{{ asset('image/cake13.jpg') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mt-5">
                <img src="{{ asset('image/cake14.jpg') }}" class="cake mx-sm-2 pb-4 pan pan-sm">
                <h4 class='text-white mt-4'>Sweet Heart</h4>
                <h6 class="text-warning my-3 fw-bolder">$120.00<h6>
                <button class="btn btn-outline-warning">ADD TO CARD</button>
            </div>
        </div>
    </div>
</section>
{{-- end cake design --}}

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
