@extends('layouts.app1')

@section('contenu')
<!-- Carousel Start -->
<div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
    @foreach($sliders as $slider)  
    <div class="carousel-inner">
            

            <div class="carousel-item active">
                <img class="w-100" src="storage/slider_images/{{$slider->slider_image}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">CamCars</h4>
                        <h1 class="display-1 text-white mb-md-4">{{$slider->description1}}</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserver maintenant</a>
                    </div>
                </div>
            </div>
           


        </div>
         @endforeach
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-banner py-5 px-4 text-center">
            <div class="py-5">
                <h1 class="display-1 text-uppercase text-primary mb-4">50% OFF</h1>
                <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                <p class="mb-4">Only for Sunday from 1st Jan to 30th Jan 2045</p>
                <a class="btn btn-primary mt-2 py-3 px-5" href="">Register Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->



<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
        <div class="row">
            @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="storage/car_images/{{ $car->car_image1 }}" alt="">
                    <h4 class="text-uppercase mb-4">{{$car->car_name}}</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>2015</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>AUTO</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="paiement/{{$car->id}}">{{$car->car_price}}fcfa/Day</a>
                    <a class="btn btn-primary px-3" href="details/{{$car->id}}">Voir details</a>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-primary px-3 center" href="{{ URL::to('clcars') }}">Voir plus</a>
    </div>
</div>
<!-- Rent A Car End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center">05</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="frontend/img/testimonial-1.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr
                    dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="frontend/img/testimonial-2.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr
                    dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="frontend/img/testimonial-3.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr
                    dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="frontend/img/testimonial-4.jpg" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Client Name</h4>
                <i class="mb-2">Profession</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr
                    dolor amet sit sea sed</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-1.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-2.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-3.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-4.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-5.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-6.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-7.png" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="frontend/img/vendor-8.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection