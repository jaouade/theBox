@extends('base')

@section('content')
    <div class="ui container">
    <a href="{{route('cat.add')}}">
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
        @forelse($categories as $category)
            <tr>
                <td> <img src="{{  '../../images/'.$category->image_cat}}" class="ui mini rounded image"></td>
                <td>{{$category->last_update}}</td>
                <td>{{$category->description_cat}}</td>
                <td>
                    @if($category->visible==1)
                        Oui
                    @else
                        Non
                    @endif
                </td>
                <td>
                    <a href="{{route('cat.edit',[$category->id_categorie,$category->id_caisse])}}">
                    <div class="ui right floated small black labeled icon button" >
                        <i class="edit icon "></i>

                    </div>
                    </a>
                    <a href="{{route('cat.delete',[$category->id_categorie,$category->id_caisse])}}">
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
