@extends('layouts.appadmin')
@section('title')
    Editer la categorie
@endsection
@section('contenu')
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Editer la categorie</h4>
                    @if (Session::has('status'))
                        <div class="alert alert-success">
                        {{ Session::get('status') }}
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
                        'action' => 'App\Http\Controllers\CategorieController@modifiercategorie',
                        'method' => 'POST',
                        'class' => 'cmxform',
                        'id' => 'commentForm',
                    ]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{Form::hidden('id',$categorie->id)}}
                        {{ Form::label('', 'Nom de la categorie', ['for' => 'cname']) }}
                        {{ Form::text('nom_categorie', $categorie->nom_categorie, ['class' => 'form-control', 'id' => 'cname']) }}
                    </div>
                    {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
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
