
<?php

    $options =["method"=>"PUT",'url'=>route('client.update',[$client->id_client]),'files'=>true,'id'=>'updateClient'];

?>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card" style="">
            <div class="card-body">
                <div class="card-block">
                    <h4 class="card-title">mise à jour </h4>
                    <h6 class="card-subtitle text-muted">lacaisse.ma</h6>
                </div>
                <div class="card-block">

                    {!! Form::model($client,$options)  !!}

                    <fieldset class="form-group floating-label-form-group">
                        {!! Form::label('nom_client','nom ') !!}
                        {!! Form::text('nom_client',null,['class'=>'form-control border-success','placeholder'=>'nom','required'=>true]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        {!! Form::label('email_client','email ') !!}
                        {!! Form::text('email_client',null,['class'=>'form-control border-success','placeholder'=>'email','required'=>true]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        {!! Form::label('tel_client','telephone ') !!}
                        {!! Form::text('tel_client',null,['class'=>'form-control border-success' ,'placeholder'=>'telephone','required'=>true]) !!}
                    </fieldset>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-outline-primary " value="mettre à jour">
                    </div>

                    {!! Form::close()!!}



                </div>
            </div>
        </div>

    </div>


</div>
</div>


