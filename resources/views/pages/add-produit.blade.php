@extends('base')


@section('content')
    @if($errors->any())
        <h4 class="ui message negative">{{$errors->first()}}</h4>
    @endif
    @include('partials.produit-form')
@endsection