<!DOCTYPE html>
<html lang="en">
<head>
        @include('backend/includes.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

        @include('backend/includes.header')

        @include('backend/includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <div class="container-fluid">
        

    <!-- Main content -->
        @yield('content')
    <!-- /.content -->
  
  

  
        
        </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
</div><!-- /.container-fluid -->
@include('backend/includes.footer')
    </div>
        @include('backend/includes.foot_scripts')

        
</body>
</html>
