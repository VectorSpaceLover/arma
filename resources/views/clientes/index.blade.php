<?php
$active = 4;
?>
@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 titulo">Cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cliente</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
<div>
            @if (session('mensagem'))
            <div class="alert alert-success">
                {{ session('mensagem') }}
            </div>
            @endif
        </div>
        <!-- /.card-header -->
<div class="text-right" style="margin:10px 20px 0px 20px;">
            <a href="/clientes/create" class="btn btn-primary col-sm-5 col-md-2" style="font-size: 12pt;">
                <i class="fa fa-plus" aria-hidden></i> 
                Adiconar</a>
        </div>
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Apelido</th>
                        <th>Nome</th>
                        <th>Bi Dire Passporte</th>
                        <th>Nacionalidade</th>
                        <th>Residencia</th>
                        <th>Casa Nr</th>
                        <th>Endereco</th>
                        <th>Provincia ID</th>
                        <th>Telefone</th>
                        <th>Naturalidade</th>
                        <th>Validade</th>
                        <th>Profissao</th>
                        <th>User ID</th>
                        <th>Data Created</th>
                        <th>TipoCliente ID</th>
                        <th>Obs</th>
                        <th></th>
                    </tr>
                </thead>
                  <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->apelido}}</td>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->bi_dire_passporte}}</td>
                        <td>{{$cliente->nacionalidade}}</td>
                        <td>{{$cliente->residencia}}</td>
                        <td>{{$cliente->casa_nr}}</td>
                        <td>{{$cliente->endereco}}</td>
                        <td>{{$cliente->provincia_id}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <td>{{$cliente->naturalidade}}</td>
                        <td>{{$cliente->validade}}</td>
                        <td>{{$cliente->profissao}}</td>
                        <td>{{$cliente->user_id}}</td>
                        <td>{{$cliente->data_created}}</td>
                        <td>{{$cliente->tipoCliente_id}}</td>
                        <td>{{$cliente->obs}}</td>
                      
                         <td class="text-center">
                            <a href="clientes/{{$cliente->id}}/edit " >
                                <i class="fa fa-edit"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;  
                            <a href=""  data-target="#moda-cliente-{{$cliente->id}}" data-toggle="modal" >
                                <i class="fa fa-trash-alt text-danger"></i>
                            </a>

                        </td>
                         
                    </tr>
                    
                              <!-- MODAL DE DELETAR ROTA-->                  
                <div class="modal fade" id="moda-cliente-{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form id="idrotas" method="POST" action="/clientes/{{$cliente->id}}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" style="font-family:sans-serif;"  id="exampleModalLabel">Deseja deletar o clientes {{$cliente->nome}}?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-primary" data-dismiss="modal">Não</a>
                                    <button type="submit" class="btn btn-danger">
                                        Sim
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection