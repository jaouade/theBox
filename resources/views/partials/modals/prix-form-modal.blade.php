<div class="modal fade text-xs-left" id="prix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel35"> Ajouter un produit</h3>

            </div>

            <?php

            $options =["method"=>"POST",'url'=>route('prix.create'),'id'=>'addPrix'];
            $prix = new \App\Prix();

            ?>


            {!! Form::model($prix,$options)  !!}
            <div class="modal-body">
                <div class="row">
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('prix','prix') !!}
                        {!! Form::number('prix',null,['class'=>'form-control border-success','placeholder'=>'prix' ,'required'=>true,'min'=>0]) !!}
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('tva','tva') !!}
                        {!! Form::number('tva',null,['class'=>'form-control border-success','placeholder'=>'tva' ,'required'=>true,'min'=>0]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('label','label') !!}
                        {!! Form::text('label',null,['class'=>'form-control border-success','placeholder'=>'label' ,'required'=>true]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('code_bar','code bar') !!}
                        {!! Form::text('code_bar',null,['class'=>'form-control border-success','placeholder'=>'code bar' ,'required'=>true]) !!}
                    </fieldset>
                    <input type="hidden" name="idproduit">
                </div>


                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary " data-dismiss="modal" value="annuler">
                    <input type="submit" class="btn btn-outline-primary " value="ajouter">
                </div>
                {!! Form::close()!!}

            </div>
        </div>
    </div>
</div>


