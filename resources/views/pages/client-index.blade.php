@extends('base')

@section('content')
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#bootstrap">
        Ajouter un client
    </button>


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