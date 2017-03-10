
@extends('base')

@section('content')
    <?php

    $options =["method"=>"POST",'url'=>route('user.connect'),'class'=>'form'];
    $accountCaisse=null;
    ?>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card" style="">
                <div class="card-body">
                    <div class="card-block">
                        <h4 class="card-title">Se Connecter</h4>
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
                        {!! Form::model($accountCaisse,$options)  !!}
                        <div class="form-body">

                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('login','login')!!}
                                {!! Form::text('login',null,['class'=>'form-control border-primary','placeholder'=>'login']) !!}
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group">
                                {!! Form::label('mdp','password')!!}
                                {!! Form::password('mdp',['class'=>'form-control border-primary','placeholder'=>'password']) !!}
                            </fieldset>
                            <div class="form-actions center">
                                <button type="submit" class="btn btn-outline-danger">Se Connecter</button>
                            </div>


                            {!! Form::close()!!}



                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>



@endsection