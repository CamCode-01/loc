@extends('layouts.app1')
@section('contenu')



    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Reserver maintenant</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Reservation</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container-fluid">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">{{$car->car_name}}</h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                   <a href=""> <img class="img-fluid" src="storage/car_images/{{$car->car_image1}}" alt=""></a>
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">{{$car->car_price}}fcfa/Day</h4>
                    <p>{{$car->car_detail}}</p>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
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
        </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4"> Details personnel</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Details  de la reservation</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Lieu de retrait</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Lieu de depôt</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Date de retrait"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Date de depôt"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Heure de retrait"
                                        data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Heure de depôt"
                                        data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" placeholder="Requête special"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">paiement</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Mobil money</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Virement bancaire</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary py-3">Reserver maintenant</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Booking End -->


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
