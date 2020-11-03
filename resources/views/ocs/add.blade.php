@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Adicionar Item</h3>
    </div>

    {!! Form::open(['url' => 'ocs', 'method' => 'post', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8']) !!}

        <div class="box-body">

            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Item') !!}
                            {!! Form::text('code', null, ['class' => 'form-control', 'placeholder'=>'Item']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Descrição') !!}
                            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder'=>'Descrição de Item']) !!}
                        </div>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Qtde') !!}
                            {!! Form::text('qtdesolic', null, ['class' => 'form-control', 'placeholder'=>'Qtde']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Endereço') !!}
                            {!! Form::text('street', null, ['class' => 'form-control', 'placeholder'=>'Endereço']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('UA') !!}
                            {!! Form::text('ua', null, ['class' => 'form-control', 'placeholder'=>'UA']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Lote') !!}
                            {!! Form::text('lote', null, ['class' => 'form-control', 'placeholder'=>'Lote']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Familia') !!}
                            {!! Form::text('family', null, ['class' => 'form-control', 'placeholder'=>'Familia']) !!}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group text-right">
                    {!! Form::submit('Adicionar', ['class' => 'btn btn-primary bgpersonalizado']) !!}
                </div>
            </div>

    {!! Form::close() !!}

</div>

@endsection