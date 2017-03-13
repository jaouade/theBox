<div class="modal fade text-xs-left" id="client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel35"> Ajouter un client</h3>
                @if($errors->any())
                    <h4 class="text-danger">{{$errors->first()}}</h4>
                @endif
            </div>

            <?php
            if ($client!=null){
                $options =["method"=>"PUT",'url'=>route('client.update',[$client->id_client,$client->id_caisse]),'files'=>true];
            }else{
                $options =["method"=>"POST",'url'=>route('client.create'),'files'=>true];
            }
            ?>


            {!! Form::model($client,$options)  !!}
            <div class="modal-body">

                <fieldset class="form-group floating-label-form-group">
                    {!! Form::label('nom_client','nom') !!}
                    {!! Form::text('nom_client',null,['class'=>'form-control border-primary','placeholder'=>'nom']) !!}
                </fieldset>
               <fieldset class="form-group floating-label-form-group">
                   {!! Form::label('email_client','email') !!}
                    {!! Form::text('email_client',null,['class'=>'form-control border-primary','placeholder'=>'email']) !!}
               </fieldset>
                 <fieldset class="form-group floating-label-form-group">
                     {!! Form::label('tel_client','telephone') !!}
                    {!! Form::text('tel_client',null,['class'=>'form-control border-primary' ,'placeholder'=>'telephone']) !!}
                </fieldset>

                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger " data-dismiss="modal" value="annuler">
                    <input type="submit" class="btn btn-success " value="ajouter">
                </div>
            {!! Form::close()!!}

        </div>
    </div>
    </div>
</div>