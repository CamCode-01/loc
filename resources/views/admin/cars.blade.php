@extends('layouts.appadmin')
@section('title')
    Voitures
@endsection
{{Form::hidden('',$increment=1)}}
@section('contenu')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Voitures</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Ordre #</th>
                                    <th>Image</th>
                                    <th>Nom de la voiture</th>
                                    <th>Categorie de la voiture</th>
                                    <th>Prix</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                <tr>
                                    <td>{{$increment}}</td>
                                    <td><img src="storage/car_images/{{$car->car_image1}}" alt=""></td>
                                    <td>{{$car->car_name}}</td>
                                    <td>{{$car->categorie_car}}</td>
                                    <td>{{$car->car_price}}</td>
                                    <td>
                                        @if($car->statut == 1)
                                        <label class="badge badge-success">Activé</label>
                                        @else()
                                        <label class="badge badge-danger">Désactivé</label>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary"  onclick="window.location='{{url('/edit_car/'.$car->id)}}'">Editer</button>
                                        <button class="btn btn-outline-danger">Supprimer</button>
                                    </td>
                                </tr>
                                {{Form::hidden('',$increment=$increment+1)}}

                                @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{asset('<script src="backend/js/data-table.js"></script>')}}
@endsection
