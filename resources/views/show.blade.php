
@extends('layouts.master')
@section('content')

@section('title','customer view')
@section('header')


   <div class="container">
       <div class="row">
           <div class="card">
               <div class="card-header border-1">
    
                <h3 class="card-title">Customer Details</h3>
                
              </div>
            
            <div class="card-body">
              <div class="d-flex">
    
                @endsection
    <a class="btn btn-primary " href="{{ route('customer.index')}}">Back</a>
    
      <span><div class="form-col"><div class="col">
          <strong>First Name:</strong>
            {{ $customer->fname}}
        </div></div></span>
    
    
      <span><div class="form-col"><div class="col">
          <strong>Last Name:</strong>
          {{ $customer->lname}}
        </div></div></span>     
    
      <span><div class="form-col"><div class="col">
          <strong>Emai:</strong>
          {{ $customer->email}}
      </div></div></span>
    
      <span><div class="form-col"><div class="col">
            <strong>Last Name:</strong>
            {{ $customer->password}}
        </div> </div></span>
    
              
</div>
</div>
</div>
</div>
</div>

@endsection



