<div class="modal fade text-xs-left" id="category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel35"> Ajouter une categorie</h3>
                @if($errors->any())
                    <h4 class="text-danger">{{$errors->first()}}</h4>
                @endif
            </div>

            <?php

                $options =["method"=>"POST",'url'=>route('cat.create'),'files'=>true,'id'=>'addCategory'];
                $category = new \App\Categorie();

            ?>


            {!! Form::model($category,$options)  !!}
            <div class="modal-body">

                <fieldset class="form-group floating-label-form-group">
                    {!! Form::text('designation_cat',null,['class'=>'form-control border-primary','placeholder'=>'designation','required'=>true]) !!}
                </fieldset>
                <fieldset class="form-group floating-label-form-group">
                    {!! Form::textarea('description_cat',null,['class'=>'form-control border-primary','placeholder'=>'description','required'=>true]) !!}
                </fieldset>
               <fieldset class="form-group floating-label-form-group">
                    {!! Form::file('image_cat',null,['class'=>' custom-file-control','placeholder'=>'image','required'=>true]) !!}
               </fieldset>
                 <fieldset class="form-group floating-label-form-group">
                    {!! Form::text('color_cat',null,['class'=>'form-control border-primary' ,'placeholder'=>'color','required'=>true]) !!}
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