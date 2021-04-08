@extends('layouts.master')
@section('content')

@section('title','customer view')
@section('header')


   <div class="container">
       <div class="row">
           <div class="card">
               <div class="card-header border-1">
    
                <h3 class="card-title">Item Details</h3>
                
              </div>
            
            <div class="card-body">
              <div class="d-flex">
    
                @endsection
    <a class="btn btn-primary " href="{{ route('items.index')}}">Back</a>
    
      <span><div class="form-col"><div class="col">
          <strong>Product Title:</strong>
            {{ $items->pTitle}}
        </div></div></span>
    
    
      <span><div class="form-col"><div class="col">
          <strong>Product Description:</strong>
          {{ $items->pDescription}}
        </div></div></span>     
    
        <span><div class="form-col"><div class="col">
            <strong>Price:</strong>
            {{ $items->pPrice}}
          </div></div></span>
    
          <span><div class="form-col"><div class="col">
            <strong>Availability :</strong>
            {{ $items->pAvailability}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Category:</strong>
            {{ $items->pCategory}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Manufacturer:</strong>
            {{ $items->pManufacturer}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>chipset:</strong>
            {{ $items->pChipset}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Size:</strong>
            {{ $items->pSize}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Resolution:</strong>
            {{ $items->pResolution}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Screen size:</strong>
            {{ $items->pScreenSize}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Panel Type:</strong>
            {{ $items->pPanelType}}
          </div></div></span>

          <span><div class="form-col"><div class="col">
            <strong>Refresh Rate:</strong>
            {{ $items->pRefreshRate}}
          </div></div></span>
    
          
</div>
</div>
</div>
</div>
</div>

@endsection
