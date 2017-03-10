<?php



    $options =["method"=>"PUT",'url'=>route('cat.update',[$category->id_categorie,$category->id_caisse]),'files'=>true];



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

        <input type="submit" class="btn btn-outline-primary " value="mettre à jour">
    </div>
{!! Form::close()!!}