@extends('layouts.appadmin')
@section('title')
    Ajouter voiture
@endsection
@section('contenu')
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter une voiture</h4>
                    @if (Session::has('statut'))
                        <div class="alert alert-success">
                        {{ Session::get('statut') }}
                    </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open([
                        'action' => 'App\Http\Controllers\CarsController@sauvercar',
                        'method' => 'POST',
                        'class' => 'cmxform',
                        'id' => 'commentForm',
                        'enctype' => 'multipart/form-data'
                    ]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('', 'Nom de la voiture', ['for' => 'cname']) }}
                        {{ Form::text('car_name', '', ['class' => 'form-control', 'id' => 'cname']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('', 'Prix de la voiture', ['for' => 'cname']) }}
                        {{ Form::number('car_price', '', ['class' => 'form-control', 'id' => 'cname']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('', 'Catégorie de la voiture') }}
                        {{ Form::select('categorie_car', $categories, null, ['placeholder' => 'sélectionner la catégorie']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('', 'image', ['for' => 'cname']) }}
                        {{ Form::file('car_image1', ['class' => 'form-control', 'id' => 'cname']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('', 'Détails de la voiture', ['for' => 'cname']) }}
                        {{ Form::text('car_detail', '', ['class' => 'form-control', 'id' => 'cname']) }}
                    </div>
                    {!! Form::submit('ajouter', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script> --}}
@endsection
