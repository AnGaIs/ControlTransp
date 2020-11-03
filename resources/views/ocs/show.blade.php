@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Ordem de Carga {{$ocs->code}}</h3>
    </div>

    <div class="box-body">

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Item') !!}
                        {!! Form::text('code', $ocs->code, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Descrição') !!}
                        {!! Form::text('description', $ocs->description, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Qtde') !!}
                        {!! Form::text('qtdesolic', $ocs->qtdesolic, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Endereço') !!}
                        {!! Form::text('street', $ocs->street, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('UA') !!}
                        {!! Form::text('ua', $ocs->ua, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Lote') !!}
                        {!! Form::text('lote', $ocs->lote, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>                        
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Familia') !!}
                        {!! Form::text('family', $ocs->family, ['class' => 'form-control', 'disabled' => true]) !!}
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