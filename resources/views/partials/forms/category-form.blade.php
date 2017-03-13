<?php
    $options =["method"=>"PUT",'url'=>route('cat.update',[$category->id_categorie,$category->id_caisse]),'files'=>true];
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
                                {!! Form::text('designation_cat',null,['class'=>'form-control border-primary ','placeholder'=>'designation']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::textarea('description_cat',null,['class'=>'form-control border-primary','placeholder'=>'description']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::file('image_cat',null,['class'=>' custom-file-control','placeholder'=>'image']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::text('color_cat',null,['class'=>'form-control border-primary' ,'placeholder'=>'color']) !!}
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
