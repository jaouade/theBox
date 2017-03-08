<?php
if ($client->id_client!=null){
    $options =["method"=>"PUT",'url'=>route('client.update',[$client->id_client,$client->id_caisse]),'files'=>true];
}else{
    $options =["method"=>"POST",'url'=>route('client.create'),'files'=>true];
}
?>


{!! Form::model($client,$options)  !!}
<div class="modal-body">

    <fieldset class="form-group floating-label-form-group">
        {!! Form::text('nom_client',null,['class'=>'form-control border-primary','placeholder'=>'nom']) !!}
    </fieldset>
    <fieldset class="form-group floating-label-form-group">
        {!! Form::text('email_client',null,['class'=>'form-control border-primary','placeholder'=>'email']) !!}
    </fieldset>
    <fieldset class="form-group floating-label-form-group">
        {!! Form::text('tel_client',null,['class'=>'form-control border-primary' ,'placeholder'=>'telephone']) !!}
    </fieldset>

    <div class="modal-footer">
        <input type="submit" class="btn btn-outline-primary " value="mettre à jour">
    </div>
{!! Form::close()!!}

