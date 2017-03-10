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

                $options =["method"=>"POST",'url'=>route('produit.create'),'files'=>true];
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
                    {{--<div id="prixForm" ></div>--}}
                    {{--<a id="addPrix" class="btn btn-link btn-success"> ajouter un prixx</a>--}}

                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary " data-dismiss="modal" value="annuler">
                    <input type="submit" class="btn btn-outline-primary " value="ajouter">
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

