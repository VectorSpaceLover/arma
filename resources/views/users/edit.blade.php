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
                    <h1 class="m-0 titulo">Editar Utilizador</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Utilizador</li>
                        <li class="breadcrumb-item active">Editar</li>
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
            <form method="POST" action="/users/{{$user->id}}" class="">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $user->id}}">
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')?old('name'): $user->name }}" required autocomplete="name" id="name" name="name" placeholder="nome">
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')?old('email'): $user->email }}" required autocomplete="email" id="email" name="email" placeholder="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado')?old('estado'): $user->estado }}" required autocomplete="estado" id="estado" name="estado" placeholder="estado">
                        @error('estado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nivelAcesso">Nivel Acesso</label>
                        <input type="text" class="form-control @error('nivelAcesso') is-invalid @enderror" value="{{ old('nivelAcesso')?old('nivelAcesso'): $user->nivelAcesso }}" required autocomplete="nivelAcesso" id="nivelAcesso" name="nivelAcesso" placeholder="nivelAcesso">
                        @error('nivelAcesso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12">
                        <label for="oldPassword">Old Password</label>
                        <input type="text" class="form-control @error('oldPassword') is-invalid @enderror" value="" required autocomplete="oldPassword" id="oldPassword" name="oldPassword" placeholder="Old Password">
                        @error('oldPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12">
                        <label for="newPassword">New Password</label>
                        <input type="text" class="form-control @error('newPassword') is-invalid @enderror" value="" required autocomplete="newPassword" id="newPassword" name="newPassword" placeholder="New Password">
                        @error('newPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="text" class="form-control @error('confirmPassword') is-invalid @enderror" value="" required autocomplete="confirmPassword" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        @error('confirmPassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden></i> Editar</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection


</div>