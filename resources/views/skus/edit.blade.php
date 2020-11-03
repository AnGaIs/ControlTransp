@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Editar Sku</h3>
    </div>

    {!! Form::open(['url' => 'skus/$skus->id_code', 'method' => 'put', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8']) !!}

        <div class="box-body">

            {!! Form::hidden('id_code', $skus->id_code) !!}

            <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Código') !!}
                                {!! Form::text('id_code', $skus->id_code, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Descrição') !!}
                                {!! Form::text('description', $skus->description, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div> 
                </div>  
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Familia') !!}
                                {!! Form::text('family', $skus->family, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Peso') !!}
                                {!! Form::text('peso', $skus->peso, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Altura') !!}
                                {!! Form::text('alt', $skus->alt, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Largura') !!}
                                {!! Form::text('lgr', $skus->lgr, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Comprimento') !!}
                                {!! Form::text('cpm', $skus->cpm, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <div class="input text">
                                    {!! Form::label('Cubagem') !!}
                                    {!! Form::text('cbg', $skus->cbg, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Paletização') !!}
                                {!! Form::text('paletization', $skus->paletization, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="input text">
                                {!! Form::label('Qtde Pallet') !!}
                                {!! Form::text('qtdepallet', $skus->qtdepallet, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            <div class="form-group text-right">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary bgpersonalizado']) !!}
            </div>
        </div>

    {!! Form::close() !!}

</div>

@endsection