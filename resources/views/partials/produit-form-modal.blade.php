<div class="modal fade text-xs-left" id="produit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
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
            if ($produit->id_produit!=null){
                $options =["method"=>"PUT",'url'=>route('produit.update',$produit->id_produit),'files'=>true];
            }else{
                $options =["method"=>"POST",'url'=>route('produit.create'),'files'=>true];
            }
            ?>


            {!! Form::model($produit,$options)  !!}
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
                    <input type="reset" class="btn btn-outline-secondary " data-dismiss="modal" value="annuler">
                    <input type="submit" class="btn btn-outline-primary " value="ajouter">
                </div>
            {!! Form::close()!!}

        </div>
    </div>
    </div>
</div>