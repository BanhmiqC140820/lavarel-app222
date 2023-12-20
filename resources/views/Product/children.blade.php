<!DOCTYPE html>
<html lang="en">

@include('Product.layouts.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
     {{-- @yield('sidebar') --}}
     @include('Product.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Topbar -->
                {{-- @yield('navbar') --}}
                @include('Product.layouts.navbar')
         <!-- End of Topbar --> 
            
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                @yield('page content')
                
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          {{-- @yield('footer') --}}
          @include('Product.layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   @include('Product.layouts.bottom')
</body>

</html>