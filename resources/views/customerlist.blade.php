@extends('customer')


@section('content')

@section('title','customer list')

      <table class="shadow table table-bordered table-hover datatable " id="t1" role="grid">
        <thead class="thead-dark">
          <tr role="row">
            <th> ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Email </th>
            <th> Password </th> 
            <th> Actions</th>
            
            
            
          </tr>
        </thead>
        <tbody>
      
        </tbody>
      </table>
      
      <script>
        $(document).ready(function() {

          var BASE = "{{url('/')}}/";
          
          var testtable =$('#t1').DataTable( {
                  "ajax": "{!! route('datatable.indexpagetable') !!}",
                  columns: [
                          
                          {data: 'id', name: 'id'}, 
                          {data: 'fname', name: 'fname'}, 
                          {data: 'lname', name: 'lname'}, 
                          {data: 'email', name: 'email'}, 
                          {data: 'password', name: 'password'},
                          {data: 'action', name: 'action'}, 
                                           
                      ]
              } );
        
    $('#t1').on('click','#delete',function(){
// alert('clicked');
var value = $(this).closest('tr').find('#hiddenID').val();
alert('Now you are about to see something new 🕴');

var params = {
    id:$(this).closest('tr').find('#hiddenID').val(),
    _token:$(this).data("token"),
  
};
$.ajax({
    url: BASE+'customer/'+value,
    type: 'Delete',
    dataType: 'Json',
    data: $.param(params),
    success:function(response){
        alert(response.message);

                  
    }
   
});

testtable
        .row( $(this).parents('tr') )
        .remove()
        .draw();

});
});
      </script>
    </div>
  </div>
&nbsp


@endsection
