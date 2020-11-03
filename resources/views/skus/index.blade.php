@extends('layouts.app')

@section('content')

<div class="box">
    
    <div class="box-header">
        <h3 class="box-title" style="color:#12AFCB"><center></center>Base de Skus</h3>
    </div>

    <div class="box-body table-responsive">

        <table id="datatable" class="table" cellspacing="0" width="100%">
            <thead>
                <tr bgcolor="#12AFCB" style="color:#ffffff">
                    <th style="text-align:center">Sku</th>
                    <th style="text-align:center">Descrição</th>
                    <th style="text-align:center">Familia</th>
                    <th style="text-align:center">Peso</th>
                    <th style="text-align:center">Altura</th>
                    <th style="text-align:center">Largura</th>
                    <th style="text-align:center">Comprimento</th>
                    <th style="text-align:center">Cubagem</th>
                    <th style="text-align:center">Paletização</th>
                    <th style="text-align:center">Qtde</th>
                    <th style="text-align:center"><span class="glyphicon glyphicon-edit "></span></th>
                    <th style="text-align:center"><span class="glyphicon glyphicon-eye-open "></span></th>
                    <th style="text-align:center"><span class="glyphicon glyphicon-trash "></span></th>
                </tr>
            </thead>
            
            <tbody>
                
                @foreach($skus as $value)

                <tr>

                    <td style="text-align:center"> {{$value->id_code}} </td>
                    
                    <td style="text-align:center"> {{$value->description}} </td>

                    <td style="text-align:center"> {{$value->family}} </td>

                    <td style="text-align:center"> {{$value->peso}} </td>
                    
                    <td style="text-align:center"> {{$value->alt}} </td>
                    
                    <td style="text-align:center"> {{$value->lgr}} </td>

                    <td style="text-align:center"> {{$value->cpm}} </td>

                    <td style="text-align:center"> {{$value->cbg}} </td>
                    
                    <td style="text-align:center"> {{$value->paletization}} </td>

                    <td style="text-align:center"> {{$value->qtdepallet}} </td>
                    
                    <td>

                        <a href="{{ URL('/') }}/skus/{{$value->id_code}}/edit" alt="Editar" title="Editar" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ URL('/') }}/skus/{{$value->id_code}}" alt="Visualizar" title="Visualizar" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-eye-open "></span>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('skus.destroy', $value->id_code) }}" accept-charset="UTF-8">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button type="submit" onclick="return confirm('Tem certeza que quer deletar?')" class="btn btn-danger btn-sm glyphicon glyphicon-trash">
                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        <br><br>

        <div class="form-group text-right">
            <a href="{{ URL('/') }}/skus/create" class="btn btn-primary bgpersonalizado">Cadastrar</a>
        </div>

    </div>

</div>

@endsection