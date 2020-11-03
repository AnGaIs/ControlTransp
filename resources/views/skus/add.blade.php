@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Cadastro de Skus</h3>
    </div>

    {!! Form::open(['url' => 'skus', 'method' => 'post', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8']) !!}

        <div class="box-body">

            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Código') !!}
                            {!! Form::text('id_code', null, ['class' => 'form-control', 'placeholder'=>'Cód']) !!}
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
                            {!! Form::label('Familia') !!}
                            {!! Form::text('family', null, ['class' => 'form-control', 'placeholder'=>'Familia']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Peso') !!}
                            {!! Form::text('peso', null, ['class' => 'form-control', 'placeholder'=>'KG']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Altura') !!}
                            {!! Form::text('alt', null, ['class' => 'form-control', 'placeholder'=>'CM']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Largura') !!}
                            {!! Form::text('lgr', null, ['class' => 'form-control', 'placeholder'=>'CM']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Comprimento') !!}
                            {!! Form::text('cpm', null, ['class' => 'form-control', 'placeholder'=>'CM']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Cubagem') !!}
                                {!! Form::text('cbg', null, ['class' => 'form-control', 'placeholder'=>'CM']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Paletização') !!}
                            {!! Form::text('paletization', null, ['class' => 'form-control', 'placeholder'=>'Las X Alt']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="input text">
                            {!! Form::label('Qtde Pallet') !!}
                            {!! Form::text('qtdepallet', null, ['class' => 'form-control', 'placeholder'=>'Qtde']) !!}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group text-right">
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary bgpersonalizado']) !!}
                </div>
            </div>

    {!! Form::close() !!}

</div>

@endsection