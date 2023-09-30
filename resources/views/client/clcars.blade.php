@extends('layouts.app1')
@section('contenu')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Liste des voitures</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white {{(request()->is('clcars') ? 'select' : '')}}" href="{{URL::to('/clcars')}}">Voir tout</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        @foreach ($categories as $categorie)
        
            <h6 class="text-uppercase text-body mr-3"><a href="select_par_cat/{{$categorie->nom_categorie}}" class="text-white {{(request()->is('select_par_cat/'.$categorie->nom_categorie) ? 'select' : '')}}">{{$categorie->nom_categorie}}</a></h6>
        
        @endforeach
    </div>
</div>
<!-- Page Header Start -->


<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Consultez nos vehicules</h1>
        <div class="row">
            @foreach ($cars as $car)
                
            <div class="col-lg-4 col-md-6 mb-2">
                <a href="details/{{$car->id}}" class="text-black">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="storage/car_images/{{$car->car_image1}}" alt="">
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
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Rent A Car End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                    <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="frontend/img/banner-left.png" alt="">
                    <div class="text-right">
                        <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                    <div class="text-left">
                        <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                    <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="frontend/img/banner-right.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


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