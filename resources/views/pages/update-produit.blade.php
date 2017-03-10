@extends('base')

@section('content')
    <?php

    $options =["method"=>"PUT",'url'=>route('produit.update',[$produit->id_produit,$produit->id_caisse])];


    ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="">
                <div class="card-body">
                    <div class="card-block ">
                        <h4 class="card-title ">Modification du produit</h4>
                        <h6 class="card-subtitle text-muted">lacaisse.ma</h6>
                    </div>
                    <div class="card-block">

                        @if($errors->any())
                            <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible fade in mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Oh snap!</strong> {{$errors->first()}}
                            </div>

                        @endif
                            {!! Form::model($produit,$options)  !!}
                        <div class="form-body">

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('designation','designation') !!}
                                {!! Form::text('designation',null,['class'=>'form-control border-primary','placeholder'=>'designation']) !!}
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('description','description') !!}
                                {!! Form::textarea('description',null,['class'=>'form-control border-primary','placeholder'=>'description']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('image','image') !!}
                                {!! Form::file('image',null,['class'=>'form-control border-primary']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('color','color') !!}
                                {!! Form::text('color',null,['class'=>'form-control border-primary','placeholder'=>'designation']) !!}
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('id_cat','categorie') !!}
                                {!! Form::select('id_cat',App\Categorie::where('visible',1)->lists('designation_cat','id_categorie'),null,['class'=>'form-control']) !!}

                            </fieldset>
                            <hr>
                            <h1>prix</h1>
                            <hr>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('prix','prix') !!}
                                {!! Form::number('prix',$prix->prix,['class'=>'form-control border-primary','placeholder'=>'prix']) !!}
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('tva','tva') !!}
                                {!! Form::number('tva',$prix->tva,['class'=>'form-control border-primary','placeholder'=>'tva']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('label','label') !!}
                                {!! Form::text('label',$prix->label,['class'=>'form-control border-primary','placeholder'=>'label']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('code_bar','code bar') !!}
                                {!! Form::text('code_bar',$prix->code_bar,['class'=>'form-control border-primary','placeholder'=>'code bar']) !!}
                            </fieldset>
                            <div class="form-actions center">
                                <button type="submit" class="btn btn-outline-danger">mettre à jour</button>
                            </div>
                        </div>

                            {!! Form::close()!!}




                    </div>
                </div>

            </div>


        </div>
    </div>



@endsection

















































