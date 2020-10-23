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
      <a class="nav-link collapsed" href="{{ url('/estudiantes') }}" >
        <i class="fas fa-user-graduate"></i>
        <span>Estudiante</span>
      </a>
    </li>
{{-- Estudio Socioeconómico --}}
<li class="nav-item">
  <a class="nav-link collapsed"  href="{{ url('/estudiosocioeconimico') }}" >
    <!-- <i class="fas fa-fw fa-wrench"></i> -->
    <i class="fas fa-dollar-sign"></i>
    <span>Estudio Socioeconómico</span>
  </a>
</li>
<div class="sidebar-heading">
      Administracion
    </div>
<li class="nav-item">
  <a class="nav-link collapsed"  href="{{ url('/grados') }}" >
    <!-- <i class="fas fa-fw fa-wrench"></i> -->
    <i class="fas fa-chalkboard-teacher"></i>
    <span>Grado</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link collapsed"  href="{{ url('/cursos') }}" >
    <!-- <i class="fas fa-fw fa-wrench"></i> -->
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    <span>Curso</span>
  </a>
</li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->