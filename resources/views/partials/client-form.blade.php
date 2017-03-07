

<?php
if ($client->id_client!=0){
    $options =["method"=>"PUT",'url'=>route('client.update',$client->id_client),'files'=>true];
}else{
    $options =["method"=>"POST",'url'=>route('client.create'),'files'=>true];
}
?>


    {!! Form::model($client,$options)  !!}
<div class="form-body">

    <div class="form-group col-xs-12 mb-2">
        {!! Form::text('nom_client',null,['class'=>'form-control border-primary','placeholder'=>'nom']) !!}
    </div>
    <div class="form-group col-xs-12 mb-2">
        {!! Form::text('email_client',null,['class'=>'form-control border-primary','placeholder'=>'email']) !!}
    </div>
    <div class="form-group col-xs-12 mb-2">
        {!! Form::text('tel_client',null,['class'=>'form-control border-primary' ,'placeholder'=>'telephone']) !!}
    </div>


    <div class="form-actions center">

        <button type="submit" class="btn btn-primary">
            <i class="icon-check2"></i> Save
        </button>
    </div>
</div>
    {!! Form::close()!!}


