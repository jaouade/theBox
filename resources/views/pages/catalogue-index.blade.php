@extends('base')

@section('content')

    <div class="card" style="">
        <div class="card-header">
            <h4 class="card-title"> CATALOGUE</h4>
        </div>
        <div class="card-body">
            <div class="card-block">
                <ul class="nav nav-tabs nav-iconfall nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" id="produits-tab1" data-toggle="tab" href="#produits" aria-controls="produits" aria-expanded="true"><i class="icon-cube2"></i> Arcitcles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="categories-tab1" data-toggle="tab" href="#categories" aria-controls="categories" aria-expanded="false"><i class="icon-ios-pricetags-outline"></i> Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="remises-tab1" data-toggle="tab" href="#remises" aria-controls="remises"><i class="icon-external-link"></i> remises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="taxes-tab1" data-toggle="tab" href="#taxes" aria-controls="taxes"><i class="icon-external-link"></i> taxes</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div role="tabpanel" class="tab-pane fade active in" id="produits" aria-labelledby="activeIcon32-tab1" aria-expanded="true">
                        <div class="col-xs-12 mt-1 mb-3">
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#produit">
                                Ajouter un nouveau produit
                            </button>
                            <hr>
                        </div>
                        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 169px;">designation</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 263px;"> description</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 133px;">Total dépensé</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Panier moyen</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produits as $produit)
                                <tr  role="row" class="odd">
                                    <td class="sorting_1">{{$produit->designation}}</td>
                                    <td>0</td>
                                    <td>0,00 €</td>
                                    <td>0,00 €</td>
                                    <td>
                                        {{--<a class="btn btn-outline-danger" href="{{route('client.delete',[$client->id_client,$client->id_caisse])}}">supprimer</a>--}}
                                        {{--<a class="btn btn-outline-primary" href="{{route('client.edit',[$client->id_client,$client->id_caisse])}}">editer</a>--}}
                                    </td>


                                </tr>
                                <?php $produit->id_produit=null;?>
                            @endforeach
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="linkIcon32-tab1" aria-expanded="false">
                        <div class="col-xs-12 mt-1 mb-3">
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#category">
                                Ajouter une nouvelle categorie
                            </button>
                            <hr>
                        </div>
                        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc sr-only" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 169px;">image</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 263px;"> designation</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 133px;">Total dépensé</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Panier moyen</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr  role="row" class="odd">
                                    <td>
                                        <span class="avatar avatar-online">
                                            <img src="{{  asset('/images').'/'.$category->image_cat}}" >

                                        </span>


                                    </td>
                                    <td>{{$category->designation_cat}}</td>
                                    <td>0,00 €</td>
                                    <td>0,00 €</td>
                                    <td>
                                        {{--<a class="btn btn-outline-danger" href="{{route('client.delete',[$client->id_client,$client->id_caisse])}}">supprimer</a>--}}
                                        {{--<a class="btn btn-outline-primary" href="{{route('client.edit',[$client->id_client,$client->id_caisse])}}">editer</a>--}}
                                    </td>


                                </tr>
                                <?php $category->id_categorie=null;?>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="dropdownOptIcon41" role="tabpanel" aria-labelledby="dropdownOptIcon41-tab1" aria-expanded="false">
                        <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                    </div>

                    <div class="tab-pane fade" id="remises" role="tabpanel" aria-labelledby="linkIconOpt31-tab1" aria-expanded="false">
                        <p>sshi icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                    </div>
                    <div class="tab-pane fade" id="taxes" role="tabpanel" aria-labelledby="linkIconOpt31-tab1" aria-expanded="false">
                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('partials.modals.produit-form-modal')
    @include('partials.modals.category-form-modal')

@endsection
