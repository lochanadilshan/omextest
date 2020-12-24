<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.5/dist/sweetalert2.all.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link href="https://pagecdn.io/lib/toastr/2.1.4/toastr.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha256-R91pD48xW+oHbpJYGn5xR0Q7tMhH4xOrWn1QqMRINtA=" >
<script src="https://pagecdn.io/lib/toastr/2.1.4/toastr.min.js" crossorigin="anonymous" integrity="sha256-Hgwq1OBpJ276HUP9H3VJkSv9ZCGRGQN+JldPJ8pNcUM=" ></script>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 id="h22"> Ajax lesson</h2>

        </div>
        <div class="pull-right">
        <a href="{{ route('ajax.index')}}">back</a>

        </div>

    </div>

</div>

<form action="{{ route('ajax.store')}}" method="post">
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            <input type="text" name="fname" class="form-control" placeholder="First name" id="fname" value="{{ old('fname') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name:</strong>
            <input type="text" name="lname" class="form-control" placeholder="Lirst name" value="{{ old('lname') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </div>
</div>
</form>

<script>
    var BASE = "{{url('/')}}/";
    $('form').on('submit', function(e){
    e.preventDefault();
    alert('default prevented');
    alert(BASE);
 
    var params ={
        fname:$('#fname').val(),
        _token:$('[name="_token"]').val(),
       
    };
    $.ajax({
        url: BASE + 'ajax',
        type: 'POST',
        dataType: 'JSON',
        data: $.param(params),
        success: function (response) {
//         Swal.fire({
//         title: response.success,
//         text: response.success,
//         icon: 'success',
//         confirmButtonText: 'Okay'
// });

// Swal.fire({
//  title: 'Input email address',
//  input: 'email',
//  inputLabel: 'Your email address',
//  inputPlaceholder: 'Enter your email address'
// })

// if (email) {
//  Swal.fire(`Entered email: ${email}`)
// }

 toastr.options.progressBar = true; 
toastr.warning(response.success)

          
        }

 

    });
    
    });

</script>
