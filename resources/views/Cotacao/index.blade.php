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
                    <h1 class="m-0 titulo">Cotacao</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cotacao</li>
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
            <a href="/cotacao/create" class="btn btn-primary col-sm-5 col-md-2" style="font-size: 12pt;">
                <i class="fa fa-plus" aria-hidden></i> 
                Adiconar</a>
        </div>
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Cliente ID</th>
                        <th>Nuit</th>
                        <th>Produto ID</th>
                        <th>Iva</th>
                        <th>Disconto</th>
                        <th>entregue</th>
                        <th>User ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                    </tr>
                </thead>
                  <tbody>
                    @foreach($cotacaos as $cotacao)
                    <tr>
                        <td>{{$cotacao->cod}}</td>
                        <td>{{$cotacao->cliente_id}}</td>
                        <td>{{$cotacao->nuit}}</td>
                        <td>{{$cotacao->produto_id}}</td>
                        <td>{{$cotacao->Iva}}</td>
                        <td>{{$cotacao->disconto}}</td>
                        <td>{{$cotacao->entregue}}</td>
                        <td>{{$cotacao->user_id}}</td>
                        <td>{{$cotacao->created_at}}</td>
                        <td>{{$cotacao->updated_at}}</td>
                      
                         <td class="text-center">
                            <a href="cotacao/{{$cotacao->id}}/edit " >
                                <i class="fa fa-edit"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;  
                            <a href=""  data-target="#modal-cotacao-{{$cotacao->id}}" data-toggle="modal" >
                                <i class="fa fa-trash-alt text-danger"></i>
                            </a>

                        </td>
                         
                    </tr>
                    
                <div class="modal fade" id="moda-cotacao-{{$cotacao->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form id="idrotas" method="POST" action="/cotacao/{{$cotacao->id}}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" style="font-family:sans-serif;"  id="exampleModalLabel">Deseja deletar o cotacaos {{$cotacao->nome}}?</h5>
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