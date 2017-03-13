<div class="modal fade text-xs-left" id="produit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="myModalLabel35"> Ajouter un produit</h3>
                @if($errors->any())
                    <h4 class="text-danger">{{$errors->first()}}</h4>
                @endif
            </div>

            <?php

                $options =["method"=>"POST",'url'=>route('produit.create'),'files'=>true,'id'=>'addProduit'];
                $produit=new \App\Produit();

            ?>


            {!! Form::model($produit,$options)  !!}
            <div class="modal-body">
                @if(session('produit_error'))
                    <div class="alert alert-icon-left  alert-arrow-left alert-danger alert-dismissible fade in mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Oh snap!</strong> {{session('produit_error')}}
                    </div>
                @endif

                <div class="row">
                    <fieldset class="form-group floating-label-form-group col-md-6">
                        {!! Form::label('designation','designation') !!}
                        {!! Form::text('designation',null,['class'=>'form-control border-success','placeholder'=>'designation','required'=>true]) !!}
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-6">
                        {!! Form::label('description','description') !!}
                        {!! Form::text('description',null,['class'=>'form-control border-success','placeholder'=>'description','required'=>true]) !!}
                    </fieldset>
                </div>

                    <div class="row">

                        <fieldset class="form-group floating-label-form-group col-md-6">
                            {!! Form::label('color','color') !!}
                            {!! Form::text('color',null,['class'=>'form-control border-success','placeholder'=>'designation','required'=>true]) !!}
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group col-md-6">
                            {!! Form::label('id_cat','categorie') !!}
                            {!! Form::select('id_cat',App\Categorie::where('visible',1)->lists('designation_cat','id_categorie'),null,['class'=>'form-control','required'=>true]) !!}

                        </fieldset>
                    </div>
                    <fieldset class="form-group floating-label-form-group">
                    {!! Form::label('image','image') !!}
                    {!! Form::file('image',null,['class'=>'form-control border-success']) !!}
                </fieldset>
                    <div id="prixForm" ></div>
                    <a  onclick="addPrixForm()" class="btn btn-link btn-warning"> ajouter un prix</a>
                    <hr>
                <div class="row " id="line">
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('prix[]','prix') !!}
                        {!! Form::number('prix[]',null,['class'=>'form-control border-success','placeholder'=>'prix' ,'required'=>true,'min'=>0]) !!}
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('tva[]','tva') !!}
                        {!! Form::number('tva[]',null,['class'=>'form-control border-success','placeholder'=>'tva' ,'required'=>true,'min'=>0]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('label[]','label') !!}
                        {!! Form::text('label[]',null,['class'=>'form-control border-success','placeholder'=>'label' ,'required'=>true]) !!}
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group col-md-3">
                        {!! Form::label('code_bar[]','code bar') !!}
                        {!! Form::text('code_bar[]',null,['class'=>'form-control border-success','placeholder'=>'code bar' ,'required'=>true]) !!}
                    </fieldset>
                </div>

                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger " data-dismiss="modal" value="annuler">
                    <input type="submit" class="btn btn-success " value="ajouter">
                </div>
            {!! Form::close()!!}

        </div>
    </div>
    </div>
</div>


<div id="formtoadd" class="sr-only">
    <hr>
    <h1>Ajouter un  prix</h1>
    <hr>
    <fieldset class="form-group floating-label-form-group">
        {!! Form::label('prix','prix') !!}
        {!! Form::number('prix',null,['class'=>'form-control border-primary','placeholder'=>'prix']) !!}
    </fieldset>

    <fieldset class="form-group floating-label-form-group">
        {!! Form::label('tva','tva') !!}
        {!! Form::number('tva',null,['class'=>'form-control border-primary','placeholder'=>'tva']) !!}
    </fieldset>
    <fieldset class="form-group floating-label-form-group">
        {!! Form::label('label','label') !!}
        {!! Form::text('label',null,['class'=>'form-control border-primary','placeholder'=>'label']) !!}
    </fieldset>
    <fieldset class="form-group floating-label-form-group">
        {!! Form::label('code_bar','code bar') !!}
        {!! Form::text('code_bar',null,['class'=>'form-control border-primary','placeholder'=>'label']) !!}
    </fieldset>


</div>

