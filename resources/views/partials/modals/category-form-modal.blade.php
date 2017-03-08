<div class="modal fade text-xs-left" id="category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
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
            if ($category->id_categorie!=null){
                $options =["method"=>"PUT",'url'=>route('cat.update',$category->id_categorie),'files'=>true];
            }else{
                $options =["method"=>"POST",'url'=>route('cat.create'),'files'=>true];
            }
            ?>


            {!! Form::model($category,$options)  !!}
            <div class="modal-body">

                <fieldset class="form-group floating-label-form-group">
                    {!! Form::text('designation_cat',null,['class'=>'form-control border-primary','placeholder'=>'designation']) !!}
                </fieldset>
                <fieldset class="form-group floating-label-form-group">
                    {!! Form::text('description_cat',null,['class'=>'form-control border-primary','placeholder'=>'description']) !!}
                </fieldset>
               <fieldset class="form-group floating-label-form-group">
                    {!! Form::file('image_cat',null,['class'=>' custom-file-control','placeholder'=>'image']) !!}
               </fieldset>
                 <fieldset class="form-group floating-label-form-group">
                    {!! Form::text('color_cat',null,['class'=>'form-control border-primary' ,'placeholder'=>'color']) !!}
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