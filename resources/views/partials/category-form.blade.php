<?php
if ($category->id_categorie!=0){
    $options =["method"=>"PUT",'url'=>route('cat.update',$category->id_categorie),'files'=>true];
}else{
    $options =["method"=>"POST",'url'=>route('cat.create'),'files'=>true];
}
?>
<div class="ui form">

    {!! Form::model($category,$options)  !!}

    <div class="field">
        {!!  Form::label('id_categorie','id cat') !!}
        {!! Form::input('number','id_categorie') !!}
    </div>
    <div class="field">
        {!! Form::label('designation_cat','designation') !!}
        {!! Form::text('designation_cat') !!}
    </div>
    <div class="field">
        {!! Form::label('description_cat','description') !!}
        {!! Form::textarea('description_cat' )!!}
    </div>
    <div class="field">
        {!! Form::label('id_caisse','id caisse') !!}
        {!! Form::input('number','id_caisse') !!}
    </div>
    <div class="field">
        {!! Form::label('color_cat','color cat') !!}
        {!! Form::text('color_cat') !!}
    </div>

    <div class="field">
        {!! Form::label('image_cat','cat image') !!}
        {!! Form::file('image_cat') !!}
    </div>
    <div class="field">

        {!! Form::label('visible','visible or not ') !!}
        {!!  Form::checkbox('visible', 1, true) !!}
    </div>


    <input type="submit" class="ui small button green">
    {!! Form::close()!!}

</div>