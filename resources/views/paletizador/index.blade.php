@extends('layouts.app')

@section('content')


<div class="box">
        <div class="box-header">
                <h3 class="box-title">Conferência de Pallets</h3>
        </div>

        <div class="display table table-striped table-bordered">
                <h3 class="box-title">Paletes Setor 1   
                <form class="" action="{{URL::to('/')}}" method="post">
                {{ csrf_field() }}
                <input type="number" name="altp1" value="">
                <button type="submit" name="button">Alterar</button></button></form></h3> 
                
        <div class="display table table-striped table-bordered">
                @foreach ($s1->chunk($altp1) as $chunk)
                        <div class="row">
                                @foreach ($chunk as $ocs)
                                        <div class="col-xs-2">{{ $ocs->code }}&emsp;{{ $ocs->family }}&emsp;{{ $ocs->street }}&emsp;{{ $ocs->lote }}&emsp;{{ $ocs->qtdesolic }}</div>
                                @endforeach
                        </div>
                @endforeach
        </div>

        <div class="display table table-striped table-bordered">
                <h3 class="box-title">Paletes Setor 2
                <form class="" action="{{URL::to('/')}}" method="post">
                {{ csrf_field() }}
                <input type="number" name="altp2" value="">
                <button type="submit" name="button">Alterar</button></button></form></h3>
                @foreach ($s2->chunk($altp2) as $chunk)
                        <div class="row">
                                @foreach ($chunk as $ocs)
                                        <div class="col-xs-2">{{ $ocs->code }}&emsp;{{ $ocs->family }}&emsp;{{ $ocs->street }}&emsp;{{ $ocs->lote }}&emsp;{{ $ocs->qtdesolic }}</div>
                                @endforeach
                        </div>
                @endforeach
                
        </div> 
        
        <div class="display table table-striped table-bordered">
                <h3 class="box-title">Paletes Setor 3
                <form class="" action="{{URL::to('/')}}" method="post">
                {{ csrf_field() }}
                <input type="number" name="altp3" value="">
                <button type="submit" name="button">Alterar</button></button></form></h3>
                @foreach ($s3->chunk($altp3) as $chunk)
                        <div class="row">
                                @foreach ($chunk as $ocs)
                                        <div class="col-xs-2">{{ $ocs->code }}&emsp;{{ $ocs->family }}&emsp;{{ $ocs->street }}&emsp;{{ $ocs->lote }}&emsp;{{ $ocs->qtdesolic }}</div>
                                @endforeach
                        </div>
                @endforeach                       
        </div>

        <div class="display table table-striped table-bordered">
                <h3 class="box-title">Paletes Setor 4
                <form class="" action="{{URL::to('/')}}" method="post">
                {{ csrf_field() }}
                <input type="number" name="altp4" value="">
                <button type="submit" name="button">Alterar</button></button></form></h3>
                @foreach ($s4->chunk($altp4) as $chunk)
                        <div class="row">
                                @foreach ($chunk as $ocs)
                                        <div class="col-xs-2">{{ $ocs->code }}&emsp;{{ $ocs->family }}&emsp;{{ $ocs->street }}&emsp;{{ $ocs->lote }}&emsp;{{ $ocs->qtdesolic }}</div>
                                @endforeach
                        </div>
                @endforeach                       
        </div> 
</div>
@endsection