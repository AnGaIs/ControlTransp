@extends('layouts.app')

@section('content')

<div class="box">
    
    <div class="box-header">
        <h3 class="box-title">Importação de Ocs</h3> <h3 class="box-title"> Paletes Fechados {{ $pulmaot }}</h3>
    </div>

    <div class="box-body table-responsive">

        <table id="datatable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
            <div class="container">
        
                @if ( Session::has('success') )
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
            @endif
        
            @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fechar</span>
                </button>
                <strong>{{ Session::get('error') }}</strong>
            </div>
            @endif
        
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <div>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
        @endif

        </table>

        <br><br>

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            Insira o arquivo xls <input type="file" name="file" class="form-control">
        
            <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">&emsp;

            <a href="{{ URL('/') }}/ocs/create" class="btn btn-primary btn-lg" style="margin-top: 3%">Cadastrar</a>&emsp;
                

        </form>

        <br><br>
        {!! Form::model($ocs, array( 'route' => array('ocs.truncate'),'method' => 'DELETE')) !!}
        <button type="submit"  class="btn btn-danger glyphicon glyphicon-trash"><i class="md md-remove"></i></button>
        {!! Form::close()!!}


    </div>

    <div class="box-body table-responsive">
        <div>
            <h3 class="box-title">Picking</h3>
        
            <table id="datatable" class="display table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr bgcolor="#12AFCB" style="color:#ffffff">
                        <th>Item</th>
                        <th>Descrição</th>
                        <th>Familia</th>
                        <th>Lote</th>
                        <th>Endereço</th>
                        <th>Total</th>
                        <th>Cubagem</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
    
                <tbody>
                    
                    @foreach($picking as $value)
    
                    <tr>
    
                        <td> {{$value->code}} </td>

                        <td> {{$value->description}} </td>
                        
                        <td> {{$value->family}} </td>
    
                        <td> {{$value->lote}} </td>
    
                        <td> {{$value->street}} </td>

                        <td> {{$value->qtdesolic}} </td>

                        <td> {{$value->cubt}} </td>

                        <td>
                            
                            <form method="POST" action="{{ route('ocs.destroy', $value->code) }}" accept-charset="UTF-8">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                            <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')" class="btn btn-danger glyphicon glyphicon-trash">
                            </form>    
                        </tr>
    
                    @endforeach
    
                </tbody>
    
            </table>
    </div>

            <h3 class="box-title">Chão de Rua</h3>
    
            <table id="datatable" class="display table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr bgcolor="#12AFCB" style="color:#ffffff">
                        <th>Item</th>
                        <th>Descrição</th>
                        <th>Familia</th>
                        <th>Lote</th>
                        <th>Endereço</th>
                        <th>Total</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <tbody>
                
                    @foreach($chaoderua as $value)

                    <tr>

                        <td> {{$value->code}} </td>

                        <td> {{$value->description}} </td>
                    
                        <td> {{$value->family}} </td>

                        <td> {{$value->lote}} </td>

                        <td> {{$value->street}} </td>

                        <td> {{$value->qtdesolic}} </td>

                    <td>
                            
                                <form method="POST" action="{{ route('ocs.destroy', $value->code) }}" accept-charset="UTF-8">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')" class="btn btn-danger glyphicon glyphicon-trash">
                                </form>    
                            </tr>
                    </tr>

                    @endforeach

                </tbody>

            </table>
    </div>


    <div class="box-body table-responsive">
        <div>
            <h3 class="box-title">Pulmão Doca</h3>
    
            <table id="datatable" class="display table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr bgcolor="#12AFCB" style="color:#ffffff">
                        <th>Item</th>
                        <th>Descrição</th>
                        <th>Familia</th>
                        <th>Lote</th>
                        <th>Endereço</th>
                        <th>Total</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <tbody>
                
                    @foreach($pulmao as $value)

                    <tr>

                        <td> {{$value->code}} </td>

                        <td> {{$value->description}} </td>
                    
                        <td> {{$value->family}} </td>

                        <td> {{$value->lote}} </td>

                        <td> {{$value->street}} </td>

                        <td> {{$value->qtdesolic}} </td>

                    <td>

                            
                                <form method="POST" action="{{ route('ocs.destroy', $value->code) }}" accept-charset="UTF-8">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')" class="btn btn-danger glyphicon glyphicon-trash">
                                </form>    
                            </tr>
                    </tr>

                    @endforeach

                </tbody>

            </table>



    </div>
@endsection