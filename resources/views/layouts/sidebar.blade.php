 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
          <img src="{{asset('assets/img/logo_black.png')}}" width="24px" height="24px" >
        {{-- <i class="fas fa-laugh-wink"></i> --}}
      </div>
      <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
    </a>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Estudiantes</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Preprimaria Primero</h6>
          <a class="collapse-item" href="{{ url('/estudiantes') }}">Lista</a>
          <a class="collapse-item" href="{{ url('/estudiantes/create') }}">Nuevo Estudiante</a>
          <h6 class="collapse-header">Medio,Diversificado</h6>
          <a class="collapse-item" href="{{ url('/estudiantes1') }}">Lista</a>
          <a class="collapse-item" href="{{ url('/estudiantes1/create') }}">Nuevo Estudiante</a>
        </div>
      </div>
    </li>
{{-- Estudio Socioeconómico --}}
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Estudio Socioeconómico</span>
  </a>
  <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Estudio Socioeconómico</h6>
      <a class="collapse-item" href="{{ url('/estudiosocioeconimico') }}">Lista</a>
      <a class="collapse-item" href="{{ url('/estudiosocioeconimico/create') }}">Nuevo Estudio</a>
    </div>
  </div>
</li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->