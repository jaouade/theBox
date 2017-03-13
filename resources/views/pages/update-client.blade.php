@extends('base')


@section('content')
    @include('partials.forms.client-form')
@endsection

@section('js')
    <script src="{{ asset('/validator/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script>
        $('#updateClient').validate();
    </script>
@endsection