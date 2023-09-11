@extends('layouts.appadmin')
@section('title')
    Catégories
@endsection
@section('contenu')
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Catégorie</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Ordre #</th>
                                            <th>Nom de la catégorie</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $categorie)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$categorie->nom_categorie}}</td>
                                            {{-- <label class="badge badge-info">On hold</label>
                                        </td> --}}
                                            <td>
                                                <button class="btn btn-outline-primary">Editer</button>
                                                <button class="btn btn-outline-danger">Supprimer</button>
                                            </td>
                                        </tr>
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
    <script src="backend/js/data-table.js"></script>
@endsection
