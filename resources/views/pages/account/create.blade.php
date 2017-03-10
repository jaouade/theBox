
@extends('base')

@section('content')
<?php

$options =["method"=>"POST",'url'=>route('account.create')];

?>


{!! Form::model($accountCaisse,$options)  !!}


<fieldset class="form-group floating-label-form-group">
    {!! Form::label('nom_societe','nom de la societé')!!}
    {!! Form::text('nom_societe',null,['class'=>'form-control border-primary','placeholder'=>'nom de la societé']) !!}
</fieldset>
<fieldset class="form-group floating-label-form-group">
    {!! Form::label('tel_societe','telephone de la societé')!!}
    {!! Form::text('tel_societe',null,['class'=>'form-control border-primary','placeholder'=>'telephone de la societé']) !!}
</fieldset>
<fieldset class="form-group floating-label-form-group">
    {!! Form::label('nom_responsable','le responsable') !!}
    {!! Form::text('nom_responsable',null,['class'=>'form-control border-primary','placeholder'=>'responsable de la societé']) !!}
</fieldset>
<fieldset class="form-group floating-label-form-group">
    {!! Form::label('login','login')!!}
    {!! Form::text('login',null,['class'=>'form-control border-primary','placeholder'=>'login']) !!}
</fieldset>
<fieldset class="form-group floating-label-form-group">
    {!! Form::label('mdp','password')!!}
    {!! Form::password('mdp',['class'=>'form-control border-primary','placeholder'=>'password']) !!}
</fieldset>



<div class="modal-footer">
    <input type="submit" class="btn btn-outline-primary " value="mettre à jour">
</div>

{!! Form::close()!!}

@endsection