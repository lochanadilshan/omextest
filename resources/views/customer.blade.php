
@include('partials.header')
@include('partials.navbar')
@include('partials.mainsidebar')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer management @yield('title')</title>  


    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-16">
                <div class="card">  
                    <div class="card-header border-1">
                        <h3 class="card-title">Online Store Visitors</h3>
                    </div>
                <div class="card-body">
             <div class="d-flex">
                
                    @yield('content')
                    
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    
   
    
            
                 
   
</body>
</html>
@include('partials.scripts')
@include('partials.footer')

