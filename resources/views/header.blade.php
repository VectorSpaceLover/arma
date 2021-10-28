 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Gestão</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets//plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <style>
    .content-wrapper {
      margin-left: 0px !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Sistema de Gestão</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          @if($active == 1)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/">Home</a>
          </li>
          @if($active == 2)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/productos">Productos</a>
          </li>
          @if($active == 3)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/users">Utilizador</a>
          </li>
          @if($active == 4)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/clientes">Clientes</a>
          </li>
          @if($active == 5)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/estoque">Estoque</a>
          </li>
          @if($active == 6)
            <li class="nav-item active dropdown">
          @else
            <li class="nav-item  dropdown">
          @endif
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Faturacao</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/faturacao">Faturacao</a></li>
              <li><a class="dropdown-item" href="/cotacao">Cotacao</a></li>
              <li><a class="dropdown-item" href="/guia">Guia de entrega</a></li>
            </ul>
          </li>
          @if($active == 7)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/despesas">Despesas</a>
          </li>
          @if($active == 8)
            <li class="nav-item active">
          @else
            <li class="nav-item ">
          @endif
            <a class="nav-link" href="/licenciamento">Licenciamento</a>
          </li>
          @if($active == 9)
            <li class="nav-item active dropdown">
          @else
            <li class="nav-item  dropdown">
          @endif
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Create menu Configuracao</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/gest">Guest</a></li>
              <li><a class="dropdown-item" href="/tipos/cliente">Tipo de cliente</a></li>
              <li><a class="dropdown-item" href="/tipos/despesas">Tipo de despesas</a></li>
              <li><a class="dropdown-item" href="/tipos/productos">Tipo de productos</a></li>
              <li><a class="dropdown-item" href="/empresa">Empresa</a></li>
            </ul>
          </li>
          @if($active == 10)
            <li class="nav-item active dropdown">
          @else
            <li class="nav-item  dropdown">
          @endif
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Configuracao</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="categorias">Categoria</a></li>
            </ul>
          </li>
        </ul>
        <!-- <form class="d-flex" style = 'position:absolute; right:10px; margin-bottom: 0px'>
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
