@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Sku {{$skus->id_code}}</h3>
    </div>

    <div class="box-body">

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Código') !!}
                        {!! Form::text('id_code', $skus->id_code, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Descrição') !!}
                        {!! Form::text('description', $skus->description, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Familia') !!}
                        {!! Form::text('family', $skus->family, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Peso') !!}
                        {!! Form::text('peso', $skus->peso, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Altura') !!}
                        {!! Form::text('alt', $skus->alt, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Largura') !!}
                        {!! Form::text('lgr', $skus->lgr, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>                        
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Comprimento') !!}
                        {!! Form::text('cpm', $skus->cpm, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>                        
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Cubagem') !!}
                        {!! Form::text('cbg', $skus->cbg, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Paletização') !!}
                        {!! Form::text('paletization', $skus->paletization, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Qtde Pallet') !!}
                        {!! Form::text('qtdepallet', $skus->qtdepallet, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group text-left">
            <a href="{{ URL::previous() }}" class="btn btn-default">Voltar</a>
            <a href="javascript::void(0);" onclick="print();" class="btn btn-primary">Imprimir</a>
        </div>

    </div>

</div>

@endsection