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
                    <h1 class="m-0 titulo">Actualizar Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                        <li class="breadcrumb-item active">Actualizar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <!-- /.card-header -->
        
        <div class="card-body">
<div class="row">
            @if (session('mensagem'))
            <div class="text-danger " style="font-weight: bold;">
               {{ session('mensagem') }}
            </div>
            @endif
        </div>
            <form method="POST" action="/clientes/{{$cliente->id}}" class="">
                @csrf
                @method('PUT')
                <!-- <input type="hidden" name="id" value="{{ $cliente->id}}"> -->
                
                 <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="apelido">Apelido</label>
                        <input type="text" class="form-control @error('apelido') is-invalid @enderror" value="{{ old('apelido')?old('apelido'):$cliente->apelido }}" required autocomplete="apelido" id="apelido" name="apelido" placeholder="">
                        @error('apelido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome')?old('nome'):$cliente->nome }}" required autocomplete="nome" id="nome" name="nome" placeholder="Digita aqui a cliente">

                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="bi_dire_passporte">Bi Dire Passporte</label>
                        <input type="text" class="form-control @error('Bi_dire_passporte') is-invalid @enderror" value="{{ old('bi_dire_passporte')?old('bi_dire_passporte'):$cliente->bi_dire_passporte }}" required autocomplete="bi_dire_passporte" id="bi_dire_passporte" name="bi_dire_passporte" placeholder="">
                        @error('bi_dire_passporte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="nuit">Nuit</label>
                        <input type="number" class="form-control @error('nuit') is-invalid @enderror" value="{{ old('nuit')?old('nuit'):$cliente->nuit }}" required autocomplete="nuit" id="nuit" name="nuit" placeholder="">
                        @error('nuit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="nacionalidade">nacionalidade</label>
                        <input type="text" class="form-control @error('nacionalidade') is-invalid @enderror" value="{{ old('nacionalidade')?old('nacionalidade'):$cliente->nacionalidade }}" required autocomplete="nacionalidade" id="nacionalidade" name="nacionalidade" placeholder="">
                        @error('nacionalidade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="residencia">Residencia</label>
                        <input type="text" class="form-control @error('residencia') is-invalid @enderror" value="{{ old('residencia')?old('residencia'):$cliente->residencia }}" required autocomplete="residencia" id="residencia" name="residencia" placeholder="">
                        @error('residencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="casa_nr">Casa Nr</label>
                        <input type="text" class="form-control @error('casa_nr') is-invalid @enderror" value="{{ old('casa_nr')?old('casa_nr'):$cliente->casa_nr }}" required autocomplete="casa_nr" id="casa_nr" name="casa_nr" placeholder="">
                        @error('casa_nr')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="endereco">Endereco</label>
                        <input type="text" class="form-control @error('endereco') is-invalid @enderror" value="{{ old('endereco')?old('endereco'):$cliente->endereco }}" required autocomplete="endereco" id="endereco" name="endereco" placeholder="">
                        @error('endereco')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="provincia_id">Provincia ID</label>
                        <input type="number" class="form-control @error('provincia_id') is-invalid @enderror" value="{{ old('provincia_id')?old('provincia_id'):$cliente->provincia_id }}" required autocomplete="provincia_id" id="provincia_id" name="provincia_id" placeholder="">
                        @error('provincia_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone')?old('telefone'):$cliente->telefone }}" required autocomplete="telefone" id="telefone" name="telefone" placeholder="">
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="naturalidade">Naturalidade</label>
                        <input type="text" class="form-control @error('naturalidade') is-invalid @enderror" value="{{ old('naturalidade')?old('naturalidade'):$cliente->naturalidade }}" required autocomplete="naturalidade" id="naturalidade" name="naturalidade" placeholder="">
                        @error('naturalidade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="estado_civil_id">Estado Civil ID</label>
                        <input type="number" class="form-control @error('estado_civil_id') is-invalid @enderror" value="{{ old('estado_civil_id')?old('estado_civil_id'):$cliente->estado_civil_id }}" required autocomplete="estado_civil_id" id="estado_civil_id" name="estado_civil_id" placeholder="">
                        @error('estado_civil_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="validade">Validade</label>
                        <input type="text" class="form-control @error('validade') is-invalid @enderror" value="{{ old('validade')?old('validade'):$cliente->validade }}" required autocomplete="validade" id="validade" name="validade" placeholder="">
                        @error('validade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="profissao">Profissao</label>
                        <input type="text" class="form-control @error('profissao') is-invalid @enderror" value="{{ old('profissao')?old('profissao'):$cliente->profissao }}" required autocomplete="profissao" id="profissao" name="profissao" placeholder="">
                        @error('profissao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="user_id">User ID</label>
                        <input type="number" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id')?old('user_id'):$cliente->user_id }}" required autocomplete="user_id" id="user_id" name="user_id" placeholder="">
                        @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="data_created">Data Created</label>
                        <input type="number" class="form-control @error('data_created') is-invalid @enderror" value="{{ old('data_created')?old('data_created'):$cliente->data_created }}" required autocomplete="data_created" id="data_created" name="data_created" placeholder="">
                        @error('data_created')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="estado">Estado</label>
                        <input type="number" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado')?old('estado'):$cliente->estado }}" required autocomplete="estado" id="estado" name="estado" placeholder="">
                        @error('estado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="tipoCliente_id">TipoCliente ID</label>
                        <input type="number" class="form-control @error('tipoCliente_id') is-invalid @enderror" value="{{ old('tipoCliente_id')?old('tipoCliente_id'):$cliente->tipoCliente_id }}" required autocomplete="tipoCliente_id" id="tipoCliente_id" name="tipoCliente_id" placeholder="">
                        @error('tipoCliente_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="obs">Obs</label>
                        <input type="text" class="form-control @error('obs') is-invalid @enderror" value="{{ old('obs')?old('obs'):$cliente->obs }}" required autocomplete="obs" id="obs" name="obs" placeholder="">
                        @error('obs')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group ml-auto">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden></i> Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection
</div>