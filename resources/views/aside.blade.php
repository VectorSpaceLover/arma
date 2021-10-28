
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/repHome" class="brand-link">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistema de Gestão</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
    <!--          <img src="" class="img-circle elevation-2" alt="User Image">-->
                <span class="fa fa-user" style=""></span>
            </div>
            <div class="info">
                <a href="/" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    @if($active ===1)
                    <a href="/" class="nav-link active">
                        @else
                        <a href="/" class="nav-link">
                            @endif
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home</p>
                        </a>
                    </a>
                </li>
                <!-- HNJ -->
                <li class="nav-item">
                    @if($active ===3)
                    <a href="/users" class="nav-link active">
                        @else
                        <a href="/users" class="nav-link">
                            @endif
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Utilizador
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                </li>

                <li class="nav-item">
                    @if($active ===4)
                    <a href="/clientes" class="nav-link active">
                        @else
                        <a href="/clientes" class="nav-link">
                            @endif
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Clientes
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                </li>

                <li class="nav-item">
                    @if($active ===6)
                    <a href="/estoque" class="nav-link active">
                        @else
                        <a href="/estoque" class="nav-link">
                            @endif
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Estoque 
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                </li>

                <li class="nav-item">
                     @if($active ===7)
                    <a href="" class="nav-link active">
                        @else
                           <a href="" class="nav-link ">
                        @endif
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Faturacao 
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                           @if($active ===8)
                        <a href="/faturacao" class="nav-link active" >
                            @else
                             <a href="/faturacao" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Faturacao </p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===9)
                        <a href="/cotacao" class="nav-link active" >
                            @else
                             <a href="/cotacao" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Cotacao</p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===10)
                        <a href="/guia" class="nav-link active" >
                            @else
                             <a href="/guia" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Guia de entrega </p>
                        </a>
                      </li>
                    </ul>
                </li>

                <li class="nav-item">
                    @if($active ===11)
                    <a href="/despesas" class="nav-link active">
                        @else
                        <a href="/despesas" class="nav-link">
                            @endif
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Despesas  
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                </li>

                <li class="nav-item">
                     @if($active ===12)
                    <a href="" class="nav-link active">
                        @else
                           <a href="" class="nav-link ">
                        @endif
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Licenciamento
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                           @if($active ===13)
                        <a href="/licenciamento" class="nav-link active" >
                            @else
                             <a href="/licenciamento" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Licenca Porto De Arma</p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===14)
                        <a href="/tipos/cliente" class="nav-link active" >
                            @else
                             <a href="/tipos/cliente" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Registro De Arma</p>
                        </a>
                      </li>
                    </ul>
                </li>

                <li class="nav-item">
                     @if($active ===15)
                    <a href="" class="nav-link active">
                        @else
                           <a href="" class="nav-link ">
                        @endif
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Create Menu Configuracao 
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                           @if($active ===16)
                        <a href="/gest" class="nav-link active" >
                            @else
                             <a href="/gest" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Gest</p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===17)
                        <a href="/tipos/cliente" class="nav-link active" >
                            @else
                             <a href="/tipos/cliente" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tipo de cliente</p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===18)
                        <a href="/tipos/despesas" class="nav-link active" >
                            @else
                             <a href="/tipos/despesas" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tipo de despesas</p>
                        </a>
                      </li>

                      <li class="nav-item">
                           @if($active ===19)
                        <a href="/tipos/produtos" class="nav-link active" >
                            @else
                             <a href="/tipos/produtos" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tipos de produtos</p> 
                        </a>
                      </li>
                      
                      <li class="nav-item">
                           @if($active ===20)
                        <a href="/empresa" class="nav-link active" >
                            @else
                             <a href="/empresa" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Empresa</p> 
                        </a>
                      </li>
                    </ul>
                </li>
                <!-- HNJ -->
                <li class="nav-item">
                     @if($active ===21)
                    <a href="" class="nav-link active">
                        @else
                           <a href="" class="nav-link ">
                        @endif
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Configuração
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                           @if($active ===22)
                        <a href="/categorias" class="nav-link active" >
                            @else
                             <a href="/categorias" class="nav-link">
                            @endif
                          <i class="far fa-circle nav-icon"></i>
                          <p>Categoria</p>
                        </a>
                      </li>
                      
                    </ul>
                </li>

                <li>
                    <a id="navbarDropdown" style="color: #F08A3E;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Sair do sistema
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
