<?php
$active = 2;
?>
@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 titulo">Armas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">arma</li>
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
            <a href="/armas/create" class="btn btn-primary col-sm-5 col-md-2" style="font-size: 12pt;">
                <i class="fa fa-plus" aria-hidden></i> 
                Adiconar</a>
        </div>
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
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
                        <th></th>
                      
                      
                    </tr>
                </thead>
                <tbody>
                    
                     @foreach($arma as $armaLinha)
                    <tr>
                        <td>{{$armaLinha->numero}}</td>
                        <td>{{$armaLinha->marca}}</td>
                        <td>{{$armaLinha->municoes}}</td>
                        <td>{{$armaLinha->calibre}}</td>
                        <td>{{$armaLinha->carregamento}}</td>
                        <td>{{$armaLinha->origem_importacao}}</td>
                        <td>{{$armaLinha->modelo}}</td>
                        <td>{{$armaLinha->classificacao}}</td>
                        <td>{{$armaLinha->nr_tiros}}</td>
                         <td>{{$armaLinha->percussao}}</td>
                        <td>{{$armaLinha->comprimento}}</td>
                        <td>{{$armaLinha->mecanismo}}</td>
                        <td>{{$armaLinha->categoria()->first()->nome}}</td>
                        <td>{{$armaLinha->preco}}</td>
                         <td>{{$armaLinha->quantidade_stoque}}</td>
                       
                        
                        
                         <td class="text-center">
                            <a href="/arma/{{$armaLinha->id}}/edit" >
                                <i class="fa fa-edit"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;  
                            <a href=""  data-target="#moda-arma-{{$armaLinha->id}}" data-toggle="modal" >
                                <i class="fa fa-trash-alt text-danger"></i>
                            </a>

                        </td>
                         
                    </tr>
                    
                              <!-- MODAL DE DELETAR ROTA-->                  
                <div class="modal fade" id="moda-arma-{{$armaLinha->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form id="idrotas" method="POST" action="/arma/{{$armaLinha->id}}">
                        @csrf
                        @method('Delete')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" style="font-family:sans-serif;"  id="exampleModalLabel">Deseja deletar arma com referência {{$armaLinha->numero}}?</h5>
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