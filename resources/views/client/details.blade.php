@extends('layouts.app1')
@section('contenu')



    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Détails de la voiture</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Détails de la voiture</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <h1 class="display-4 text-uppercase mb-5">{{$car->car_name}}</h1>
                    <div class="row mx-n2 mb-3">
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="storage/car_images/{{$car->car_image1}}" alt="">
                        </div>
                        <div class="col-md-3 col-6 px-2 pb-2">
                            <img class="img-fluid w-100" src="storage/car_images/{{$car->car_image2}}" alt="">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-3 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Model: {{$car->afabrication}}</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Boîte de vitesse: {{$car->bvitesse}}</span>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <i class="fa fa-car text-primary mr-2"></i>
                            <span>Kilometrage: {{$car->kmetrage}}km</span>
                        </div>
                    </div>
                    <p>{{$car->car_detail}}</p>

               </div>

                <div class="col-lg-4 mb-5">
                    <div class="bg-secondary p-5">
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="button" style="height: 50px;"><a href="paiement/{{$car->id}}">Reservez ici</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->




  @endsection
