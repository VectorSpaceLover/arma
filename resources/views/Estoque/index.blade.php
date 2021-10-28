<?php
$active = 6;
?>
@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 titulo">Estoque</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Estoque</li>
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
            <a href="/estoque/create" class="btn btn-primary col-sm-5 col-md-2" style="font-size: 12pt;">
                <i class="fa fa-plus" aria-hidden></i> 
                Adiconar</a>
        </div>
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Número</th>
                        <th>Marca</th>
                        <th>Municões</th>
                        <th>Calibre</th>
                        <th>Carregamento</th>
                        <th>Oringem de importação</th>
                        <th>Modelo</th>
                        <th>Classificação</th>
                        <th>Número de Tiros</th>
                        <th>Percussão</th>
                        <th>Comprimento do cano</th>
                        <th>Mecanismo</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Tipo De Produtos</th>
                        <th></th>
                      
                      
                    </tr>
                </thead>
                <tbody>
                    
                     @foreach($produto as $produtoLinha)
                    <tr>
                        <td>{{$produtoLinha->id}}</td>
                        <td>{{$produtoLinha->nome}}</td>
                        <td>{{$produtoLinha->numero}}</td>
                        <td>{{$produtoLinha->marca}}</td>
                        <td>{{$produtoLinha->municoes}}</td>
                        <td>{{$produtoLinha->calibre}}</td>
                        <td>{{$produtoLinha->carregamento}}</td>
                        <td>{{$produtoLinha->origem_importacao}}</td>
                        <td>{{$produtoLinha->modelo}}</td>
                        <td>{{$produtoLinha->classificacao}}</td>
                        <td>{{$produtoLinha->nr_tiros}}</td>
                         <td>{{$produtoLinha->percussao}}</td>
                        <td>{{$produtoLinha->comprimento}}</td>
                        <td>{{$produtoLinha->mecanismo}}</td>
                        <td>{{$produtoLinha->categoria()->first()->nome}}</td>
                        <td>{{$produtoLinha->preco}}</td>
                         <td>{{$produtoLinha->quantidade_stoque}}</td>
                         <td>{{$produtoLinha->validade}}</td>
                         
                       
                     
                         <td class="text-center">
                            <a href="/produtos/{{$produtoLinha->id}}/edit" >
                                <i class="fa fa-edit"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;  
                            <a href=""  data-target="#moda-produto-{{$produtoLinha->id}}" data-toggle="modal" >
                                <i class="fa fa-trash-alt text-danger"></i>
                            </a>

                        </td>
                         
                    </tr>
                    
                              <!-- MODAL DE DELETAR ROTA-->                  
                <div class="modal fade" id="moda-produto-{{$produtoLinha->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form id="idrotas" method="POST" action="/produtos/{{$produtoLinha->id}}">
                        @csrf
                        @method('Delete')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" style="font-family:sans-serif;"  id="exampleModalLabel">Deseja deletar arma com referência {{$produtoLinha->nome}}?</h5>
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