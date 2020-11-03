@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet">

    <section class="content">

        <div class="page-header">
            <div class="jumbotron">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="panel-1">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-cubes fa-4x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge">Skus</div>
										<div>{{ $getData }}</div>
									</div>
								</div>
							</div>
							<a href="{{ URL('/') }}/skus">
								<div class="panel-footer">
									<span class="pull-left">Cadastro</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="panel-2">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-upload fa-4x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"></div>
										<div>DTs</div>
									</div>
								</div>
							</div>
							<a href="{{ URL('/') }}/ocs">
								<div class="panel-footer">
									<span class="pull-left">Ordem de Carga</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="panel-3">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-stack-overflow fa-4x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"></div>
										<div>Montagem</div>
									</div>
								</div>
							</div>
							<a href="{{ URL('/') }}/paletizador">
								<div class="panel-footer">
									<span class="pull-left">Paletizador</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="panel-4">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-barcode fa-4x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"></div>
										<div>Impressão</div>
									</div>
								</div>
							</div>
							<a href="customers.php">
								<div class="panel-footer">
									<span class="pull-left">PickList</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
				</div>	
            </div>
		</div>
		
		
        <div class="row">
			
			@php
				$indicadores = \App\Indicators::all();
			@endphp

			@foreach($indicadores as $key => $value)
				
				@php

					$result = $cards = DB::select($value->query);

					$count = current($result[0]); 

				@endphp			

				<div class="col-md-{{$value->size}} col-sm-{{($value->size * 2)}} col-xs-{{($value->size * 4)}}">
					<div class="info-box">
						<span class="info-box-icon bg-{{$value->color}}"><i class="{{$value->glyphicon}}"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">{{$value->title}}</span>
							<span class="info-box-number">{{$count}}</span>
							
							@if($value->link != '')
								<a href="{{$value->link}}" target="_blank">
							@endif
							
							<p>{{$value->name}}</p>
							
							@if($value->link != '')
								</a>
							@endif


						</div>
					</div>
				</div>
			
			@endforeach

		</div>
        
    </section>

@endsection