<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer management @yield('title')</title>  

</head>

<!-- Header -->
@include('layouts.header')

<body>

<!-- Navbar -->
@include('layouts.navbar')

    
<!-- Main Sidebar Container -->
@include('layouts.mainsidebar')

<div class="content-wrapper" style="min-height: 560px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('header')
    @yield('content')

    


    <!-- /.content -->
</div>
    
    
                    
<!-- Main Footer -->
@include('layouts.footer')    
   
@include('layouts.scripts') 

</body>
</html>