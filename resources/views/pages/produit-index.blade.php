@extends('base')

@section('content')
    <div class="ui container">
        <a href="{{route('produit.add')}}">
            <div class="ui left floated small green labeled icon button" >
                <i class="add icon"></i> Ajouter

            </div>
        </a>
    </div>

    <table class="ui inverted blue table">
        <thead>
        <tr><th>image</th>
            <th>last update</th>
            <th>description</th>
            <th>visible</th>
            <th><center>action</center></th>
        </tr>
        </thead>
        <tbody>
        @forelse($produits as $produit)
            <tr>
                <td> <img src="{{  '../../images/produit/'.$produit->image}}" class="ui mini rounded image"></td>
                <td>{{$produit->last_update}}</td>
                <td>{{$produit->description}}</td>
                <td>
                    @if($produit->visible==1)
                        Oui
                    @else
                        Non
                    @endif
                </td>
                <td>
                    <a href="{{route('produit.edit',[$produit->id_produit,$produit->id_caisse])}}">
                        <div class="ui right floated small black labeled icon button" >
                            <i class="edit icon"></i>

                        </div>
                    </a>
                    <a href="{{route('produit.delete',[$produit->id_produit,$produit->id_caisse])}}">
                        <div class="ui right floated small red labeled icon button" >
                            <i class="trash icon"></i>

                        </div>
                    </a>
                </td>

            </tr>
        @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforelse

        </tbody>
    </table>


@endsection
