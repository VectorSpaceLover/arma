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
                    <h1 class="m-0 titulo">Actualizar Produtos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
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
            <form method="POST" action="/produtos/{{$produto->id}}" class="">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $produto->id}}">
                
                 <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="nome">Código</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome')?old('nome'): $produto->id }}" required autocomplete="nome" id="nome" name="nome" placeholder="nome">
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     </div>
                <div class="form-row">
                  
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome')?old('nome'): $produto->nome }}" required autocomplete="nome" id="nome" name="nome" placeholder="nome">
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-6">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero')?old('numero'): $produto->numero }}" required autocomplete="numero" id="numero" name="numero" placeholder="Digita aqui o teu numero">

                        @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                </div>
                
                
                
                
                
                
                
                
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validade">Validade</label>
                        <input type="date" class="form-control @error('validade') is-invalid @enderror" value="{{ old('validade')?old('validade'): $produto->validade }}" required autocomplete="validade" id="validade" name="validade" placeholder="Digita aqui o teu validade">

                        @error('validade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca')?old('marca'): $produto->marca }}" required autocomplete="marca" id="marca" name="marca" placeholder="numero">
                        @error('marca')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="municoes">Municões</label>
                        <input type="number" min="1" class="form-control @error('municoes') is-invalid @enderror" value="{{ old('municoes')?old('municoes'): $produto->municoes }}" required autocomplete="municoes" id="municoes" name="municoes" placeholder="Digita aqui a municões">
                        @error('municoes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-3">
                        <label for="calibre">Calibre</label>
                        <input type="text" class="form-control @error('calibre') is-invalid @enderror" value="{{ old('calibre')?old('calibre'):  $produto->calibre }}" required autocomplete="morada" id="calibre" name="calibre" placeholder="Digita aqui a calibre">
                        @error('calibre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-3">
                        <label for="carregamento">Carregamento</label>
                        <input type="text" class="form-control @error('carregamento') is-invalid @enderror" value="{{ old('carregamento')?old('carregamento'): $produto->carregamento }}" required autocomplete="carregamento" id="naturalidade" name="carregamento" placeholder="Digita aqui a carregamento">
                        @error('carregamento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-3">
                        <label for="importacao">Oringem de importação</label>
                        <input type="text" class="form-control @error('importacao') is-invalid @enderror" value="{{ old('importacao')?old('importacao'): $produto->origem_importacao }}" required autocomplete="importacao" id="importacao" name="importacao" placeholder="">
                        @error('importacao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-3">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo')?old('modelo'): $produto->modelo }}" required autocomplete="modelo" id="modelo" name="modelo" placeholder="Digita aqui o modelo">
                        @error('modelo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="classificacao">Classificação</label>
                        <input type="text" class="form-control @error('classificacao') is-invalid @enderror" value="{{ old('classificacao')?old('classificacao'):  $produto->classificacao }}" required autocomplete="Classificação" id="classificacao" name="classificacao" placeholder="">
                        @error('classificacao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-2">
                        <label for="tiros">Número de Tiros</label>
                        <input type="number" min="1" class="form-control @error('tiros') is-invalid @enderror" value="{{ old('tiros')?old('tiros'):  $produto->nr_tiros }}" required autocomplete="tiros" id="tiros" name="tiros" placeholder="">
                        @error('tiros')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-2">
                        <label for="percursao">Percussão</label>
                        <input type="text" class="form-control @error('percursao') is-invalid @enderror" value="{{ old('percursao')?old('percursao'):  $produto->percussao  }}" required autocomplete="percursao" id="percursao" name="percursao" placeholder="Digita aqui a percursao">
                        @error('percursao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  
                </div>
                   <div class="form-row">
                       <div class="form-group col-md-3">
                        <label for="comprimentoCano">Comprimento do cano</label>
                        <input type="text" class="form-control @error('comprimentoCano') is-invalid @enderror" value="{{ old('comprimentoCano')?old('comprimentoCano'): $produto->comprimento  }}" required autocomplete="comprimentoCano" id="comprimentoCano" name="comprimentoCano" placeholder="">
                        @error('comprimentoCano')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-3">
                        <label for="mecanismo">Mecanismo</label>
                        <input type="text" class="form-control @error('mecanismo') is-invalid @enderror" value="{{ old('mecanismo')?old('mecanismo'): $produto->mecanismo }}" required autocomplete="mecanismo" id="mecanismo" name="mecanismo" placeholder="">
                        @error('morada')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                 <div class="form-row">
                     <div class="form-group col-md-3">
                        <label for="categoria">Categoria</label>
                         <select name="categoria" class="form-control" required>
                            <option value="">Escolha Categoria</option>
                            @foreach($categoria as $categoriaLinha)
                            
                            <option value="{{$categoriaLinha->id}}"
                                    @if($categoriaLinha->id ==  $produto->categoria_id)
                                    selected
                                    @endif
                                    
                                    >{{$categoriaLinha->nome}}</option>
                            
                            @endforeach
                        </select>
                        @error('categoria')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group col-md-2">
                        <label for="preco">Preço</label>
                        <input type="number" step="0.5" min="1" class="form-control @error('preco') is-invalid @enderror" value="{{ old('preco')?old('preco'):  $produto->preco }}" required autocomplete="preco" id="preco" name="preco" placeholder="">
                        @error('preco')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                      <div class="form-group col-md-2">
                        <label for="quantidade_stoque">Quantidade Inicial</label>
                        <input type="number" min="1" class="form-control @error('quantidade_stoque') is-invalid @enderror" value="{{ old('quantidade_stoque')?old('quantidade_stoque'): $produto->quantidade_stoque  }}" required autocomplete="quantidade_stoque" id="quantidade_stoque" name="quantidade_stoque" placeholder="">
                        @error('quantidade_stoque')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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