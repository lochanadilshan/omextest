@include('partials.header')




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>

 <body>

   <div class="container">
       <div class="row">
           <div class="card">
               <div class="card-header border-1">
    
                <h3 class="card-title">View Customer</h3>
                
              </div>
            
            <div class="card-body">
              <div class="d-flex">
    
    
    <a class="btn btn-primary " href="{{ route('customer.index')}}">Back</a>
    
    <span><div class="form-col"><div class="col">
        <strong>First Name:</strong>
        {{ $customer->fname}}
    </div></div></span>
    
    
      <span><div class="form-col"><div class="col">
        <strong>Last Name:</strong>
      {{ $customer->lname}}
    </div></div>
  </span>     
    
  <span><div class="form-col"><div class="col">
    <strong>Emai:</strong>
 {{ $customer->email}}
</div></div></span>
    
               <span><div class="form-col"><div class="col">
                <strong>Last Name:</strong>
             {{ $customer->password}}
         </div> 
     </div></span>
    
              
</div>
</div>
</div>
</div>
</div>

   
   
</body>
</html>






