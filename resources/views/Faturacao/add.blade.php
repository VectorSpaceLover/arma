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
                    <h1 class="m-0 titulo">Adicionar Faturacao</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Faturacao</li>
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

            <form method="POST" action="/faturacao" class="">
                @csrf

                <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="cod">Cod</label>
                        <input type="number" class="form-control @error('cod') is-invalid @enderror" value="{{ old('cod') }}" required autocomplete="cod" id="cod" name="cod" placeholder="">
                        @error('cod')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="cliente_id">Cliente ID</label>
                        <input type="number" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id') }}" required autocomplete="cliente_id" id="cliente_id" name="cliente_id" placeholder="">
                        @error('cliente_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="nuit">Nuit</label>
                        <input type="number" class="form-control @error('nuit') is-invalid @enderror" value="{{ old('nuit') }}" required autocomplete="nuit" id="nuit" name="nuit" placeholder="">
                        @error('nuit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="produto_id">Produto ID</label>
                        <input type="number" class="form-control @error('produto_id') is-invalid @enderror" value="{{ old('produto_id') }}" required autocomplete="produto_id" id="produto_id" name="produto_id" placeholder="">
                        @error('produto_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="Iva">Iva</label>
                        <input type="text" class="form-control @error('Iva') is-invalid @enderror" value="{{ old('Iva') }}" required autocomplete="Iva" id="Iva" name="Iva" placeholder="">
                        @error('Iva')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="disconto">Disconto</label>
                        <input type="text" class="form-control @error('disconto') is-invalid @enderror" value="{{ old('disconto') }}" required autocomplete="disconto" id="disconto" name="disconto" placeholder="">
                        @error('disconto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="entregue">Entregue</label>
                        <input type="text" class="form-control @error('entregue') is-invalid @enderror" value="{{ old('entregue') }}" required autocomplete="entregue" id="entregue" name="entregue" placeholder="">
                        @error('entregue')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="user_id">User ID</label>
                        <input type="number" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" required autocomplete="user_id" id="user_id" name="user_id" placeholder="">
                        @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="pago">pago</label>
                        <input type="number" class="form-control @error('pago') is-invalid @enderror" value="{{ old('pago') }}" required autocomplete="pago" id="pago" name="pago" placeholder="">
                        @error('pago')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group ml-auto">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden></i> Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection


    </div>