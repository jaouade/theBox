@extends('base')


@section('content')

    @include('partials.forms.category-form')
@endsection
@section('js')
    <script src="{{ asset('/validator/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script>
        $('#updateCat').validate();
    </script>
@endsection