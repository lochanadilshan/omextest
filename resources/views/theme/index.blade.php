
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | index</title>
</head>
  <!-- Header -->

  @include('partials.header')

  <body class=" layout-top-nav sidebar-closed sidebar-collapse" style="height: auto;">

    
    <div class="wrapper"> 


  <!-- Navbar -->
  @include('partials.navbar')
  

  <!-- Main Sidebar Container -->
  @include('partials.mainsidebar')
  
  
  <!-- Content Wrapper. Contains page content -->
  @include('partials.breadcrumb')

  

  

  <!-- Main Footer -->
  @include('partials.footer')
  
</div>


<!-- REQUIRED SCRIPTS -->
@include('partials.scripts')


</body>
</html>
