@extends('base')

@section('content')
    <div class=" col-md-12 ">
        <div class="card" style="">
            <div class="card-header">
                <h4 class="card-title">Les Clients</h4>

            </div>
            <div class="card-body">
                <div class="card-block">
                    <h5>tous les client pour de la caisse { ... }</h5>
                    <div class="col-xs-12 mt-1 mb-3">
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#client">
                            Ajouter une nouveau client
                        </button>
                        <hr>
                        @if(Session::has('success'))

                            <div class="alert bg-success alert-icon-left alert-dismissible fade in mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Well done!</strong>{{ Session::get('success') }}.
                            </div>
                        @endif
                        @if(Session::has('error'))

                            <div class="alert bg-danger alert-icon-left alert-dismissible fade in mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Well done!</strong>{{ Session::get('error') }}.
                            </div>
                        @endif
                    </div>
                </div>
                <div class="embed-responsive embed-responsive-item embed-responsive-4by3">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 169px;">Client</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 263px;"> Ventes</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 133px;">Total dépensé</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Panier moyen</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 53px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr  role="row" class="odd">
                                        <td class="sorting_1">{{$client->nom_client}}</td>
                                        <td>0</td>
                                        <td>0,00 €</td>
                                        <td>0,00 €</td>
                                        <td width="20%">
                                            <a onclick="deleteClient({{$client->id_client}})" class="btn btn-sm btn-danger" >supprimer</a>
                                            <a class="btn btn-sm btn-primary" href="{{route('client.edit',[$client->id_client])}}">editer</a>
                                        </td>


                                    </tr>
                                    <?php $client=null;?>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>

                <div class="card-block">

                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">

            </div>
        </div>
    </div>



    @include('partials.modals.client-form-modal')



@endsection

@section('js')

    <script>
        function deleteClient(id) {
            let r = confirm("voulez vous continuez cette operation ?");
            if (r) {
                window.location.href = "http://localhost/lacaisse/public/index.php/clients/delete/"+id;
            }
        }
    </script>
@endsection











