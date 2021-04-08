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

<div class="content-wrapper" style="min-height: 560px; bg-image">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
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