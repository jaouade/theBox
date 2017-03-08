@extends('base')

@section('content')
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#bootstrap">
        Ajouter un client
    </button>
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
                            <td>
                                <a class="btn btn-outline-danger" href="{{route('client.delete',[$client->id_client,$client->id_caisse])}}">supprimer</a>
                                <a class="btn btn-outline-primary" href="{{route('client.edit',[$client->id_client,$client->id_caisse])}}">editer</a>
                            </td>


                        </tr>
                        <?php $client->id_client=null;?>
                    @endforeach
                    </tbody>

                </table>


    @include('partials.client-form-modal')



@endsection
<script
        src="https://code.jquery.com/jquery-1.11.3.min.js"
       ></script>

<script>
    $(document).ready(function(){
        @if ($errors->any())
        $('#bootstrap').modal('show');
        @endif

    });

</script>