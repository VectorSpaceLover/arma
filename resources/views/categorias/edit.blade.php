<?php
$active = 3;
?>
@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 titulo">Adicionar Categoria</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categoria</li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">

            <form method="POST" action="/categorias/{{$categoria->id}}" class="">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome')?old('nome'):$categoria->nome }}" required autocomplete="nome" id="nome" name="nome" placeholder="Digita aqui a categoria">

                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="obs">Observação</label>
                        <textarea cols="60" rows="5" class="form-control" value="{{ old('obs')?old('obs'):$categoria->obs }}"  autocomplete="obs" id="nome" name="obs" placeholder="Digita aqui ">{{ old('obs')?old('obs'):$categoria->obs }}
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden></i> Actualizar</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection


    </div>