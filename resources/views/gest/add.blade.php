<?php
$active = 16;
?>
@extends('base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 titulo">Adicionar utilizador</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">utilizador</li>
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

            <form method="POST" action="/produtos" class="">
                @csrf
                 <div class="form-row">
                    <div class = 'form-group col-md-3'></div>
                    <div class="form-group col-md-6">
                        <label for="numero">Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" required autocomplete="nome" id="numero" name="nome" placeholder="Digita aqui o teu nome">

                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class = 'form-group col-md-3'></div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" id="numero" name="email" placeholder="Digita aqui o teu email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
               
                <!-- <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validade">Validade</label>
                        <input type="date" class="form-control @error('validade') is-invalid @enderror" value="{{ old('validade') }}" required autocomplete="validade" id="numero" name="validade" placeholder="Digita aqui o teu validade">

                        @error('validade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca') }}" required autocomplete="marca" id="marca" name="marca" placeholder="numero">
                        @error('marca')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="municoes">Municões</label>
                        <input type="number" min="1" class="form-control @error('municoes') is-invalid @enderror" value="{{ old('municoes') }}" required autocomplete="municoes" id="municoes" name="municoes" placeholder="Digita aqui a municões">
                        @error('municoes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden></i> Adicionar</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection


    </div>