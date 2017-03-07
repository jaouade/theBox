<?php
if ($produit->id_produit!=0){
    $options =["method"=>"PUT",'url'=>route('produit.update',$produit->id_produit),'files'=>true];
}else{
    $options =["method"=>"POST",'url'=>route('produit.create'),'files'=>true];
}
?>
<div class="ui form">

    {!! Form::model($produit,$options)  !!}

    <div class="field">
        {!!  Form::label('id_produit','id produit') !!}
        {!! Form::input('number','id_produit') !!}
    </div>
    <div class="field">
        {!! Form::label('designation','designation') !!}
        {!! Form::text('designation') !!}
    </div>
    <div class="field">
        {!! Form::label('description','description') !!}
        {!! Form::textarea('description' )!!}
    </div>

    <div class="field">
        {!! Form::label('id_caisse','la caisse') !!}
        {!! Form::select('id_caisse',App\Caisse::lists('id_caisse_table','id_caisse'),null,['class'=>'form-control']) !!}
    </div>
    <div class="field">
        {!! Form::label('id_cat','categorie') !!}
        {!! Form::select('id_cat',App\Categorie::lists('designation_cat','id_categorie'),null,['class'=>'form-control']) !!}
    </div>
    <div class="field">
        {!! Form::label('color','color ') !!}
        {!! Form::text('color') !!}
    </div>

    <div class="field">
        {!! Form::label('image','cat image') !!}
        {!! Form::file('image') !!}
    </div>
    <div class="field">

        {!! Form::label('visible','visible or not ') !!}
        {!!  Form::checkbox('visible', 1, true) !!}
    </div>


    <input type="submit" class="ui small button green">
    {!! Form::close()!!}

</div>