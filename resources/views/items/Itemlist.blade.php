@extends('layouts.master')
@section('content')

@section('title','item list')
@section('header')

   <div class="container">
       <div class="row">
           <div class="card">
               <div class="card-header border-1">   
                <h3 class="card-title">Item List</h3>               
              </div>
              <div class="card-body">
              <div class="d-flex">
    
                @endsection

      <table class="shadow table table-bordered table-hover 2 " id="t2" role="grid">
        <thead class="thead-dark">
          <tr role="row">
            <th> ID </th>
            <th> Product Title </th>
            <th> Price </th>
            <th>  Type </th>
            <th> Manufacturer </th>            
            <th> Action</th>    
          </tr>
        </thead>
      </table>      
      <script>

        $(document).ready(function() {

          var BASE = "{{url('/')}}/";
          
          var test1 =$('#t2').DataTable( {
                  "ajax": "{!! route('datatable2.itemlisttable') !!}",
                  columns: [
                          
                          {data: 'id', name: 'id'}, 
                          {data: 'pTitle', name: 'pTitle'},            
                          {data: 'pPrice', name: 'pPrice'}, 
                          {data: 'pCategory', name: 'pCategory'},
                          {data: 'pManufacturer', name: 'pManufacturer'}, 
                          {data: 'action', name: 'action'}, 
                                           
                          ]
              } );
        
    $('#t2').on('click','#delete',function(){
// alert('clicked');
var value = $(this).closest('tr').find('#hiddenID').val();
alert('Now you are about to see something new 🕴');

var params = {
    id:$(this).closest('tr').find('#hiddenID').val(),
    _token:$(this).data("token"),
  
};
$.ajax({
    url: BASE+'items/'+value,
    type: 'Delete',
    dataType: 'Json',
    data: $.param(params),
    success:function(response){
        alert(response.message);

                  
    }
   
});

test1
        .row( $(this).parents('tr') )
        .remove()
        .draw();

});
});
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
          
@endsection