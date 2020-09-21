<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        @include('layouts.topbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <main class="py-4">
            @yield('content')
          </main>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
