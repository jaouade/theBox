<?php
    $options =["method"=>"PUT",'url'=>route('cat.update',[$category->id_categorie]),'files'=>true,'id'=>'updateCat'];
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

                        {!! Form::model($category,$options)  !!}
                        <div class="form-body">

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::text('designation_cat',null,['class'=>'form-control border-primary ','placeholder'=>'designation','required'=>true]) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::text('description_cat',null,['class'=>'form-control border-primary','placeholder'=>'description','required'=>true]) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::file('image_cat',null,['class'=>' custom-file-control','placeholder'=>'image','required'=>true]) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::text('color_cat',null,['class'=>'form-control border-primary' ,'placeholder'=>'color','required'=>true]) !!}
                            </fieldset>
                            <div class="modal-footer">

                                <input type="submit" class="btn btn-outline-primary " value="mettre à jour">
                            </div>




                        </div>
                        {!! Form::close()!!}


                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
