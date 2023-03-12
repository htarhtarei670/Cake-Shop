@extends('main')

@section('content')
 {{-- start home page --}}
<section class="home">
    <div class="container">
        <div class="row d-flex align-items-center" style="height: 50vh">
            <div class="col-lg-6 col-md-12">
                <h1 class="text-white fs-7 animate__animated animate__fadeInUp">Contact Us</h1>
            </div>
        </div>
    </div>
</section>
{{-- end home page --}}

{{-- start map area --}}
<div class="container pt-6">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=myanmar&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://2yu.co">2yu</a><br>
            <a href="https://embedgooglemap.2yu.co/">html embed google map</a>
        </div>
    </div>
</div>
{{-- end map area --}}

{{-- start register area --}}
<div class="container pt-5">
    <p class="fs-1 text-white">Get in Touch</>
    <form action="">
        <div class="row">
           <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">
                        <textarea name="" class="input my-2" placeholder="Enter Message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="" class="input my-2" placeholder="Enter your name">
                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="" class="input my-2" placeholder="Enter your email">
                    </div>
                    <div class="col-12">
                        <input type="text" name="" class="input my-2" placeholder="Enter subject">
                    </div>
                </div>
                <button class="btn-online btn mt-4">SEND</button>
            </div>
            <div class="col-lg-5 mt-5">
                <div class="d-flex text-white justify-content-lg-center mb-3">
                    <i class="fa-solid fa-house-chimney fs-2"></i>
                    <div class="ps-4">
                        <h6 class="text-white">Buttonwood, California.</h6>
                        <p class='fw-bolder text-white ptn'>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="d-flex text-white justify-content-lg-center mb-3">
                    <i class="fa-solid fa-chalkboard fs-2"></i>
                    <div class="ps-4">
                        <h6 class="text-white">+1 253 565 2365</h6>
                        <p class='fw-bolder text-white ptn'>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="d-flex text-white justify-content-lg-center mb-3">
                    <i class="fa-solid fa-envelope-circle-check fs-2"></i>
                    <div class="ps-4">
                        <h6 class="text-white">support@colorlib.com</h6>
                        <p class='fw-bolder text-white ptn'>Send us anytime </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- end register area --}}

@endsection
