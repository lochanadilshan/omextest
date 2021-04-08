@extends('layouts.master')
@section('content')

@section('title','customer edit')
@section('header')

    {{-- <script>
        $(function(){
            $("form").submit(function(e){
                e.preventdefault();
                alart('hi guys');
                $(this).hide();
            });
            $("#abc").click(function){
                var email - $("#abcd").val();
                alart(email)
            }
        }
        )
    </script> --}}
    {{-- <button onclick="setTimeout(myFunction, 3000)">Try it</button> --}}



</head>
    <body>
        <br>


        @if ($errors->any())
    <div class="alert alert-danger">
        {{-- <strong>Warning!</strong> Please check your inputs<br><br> --}}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>
    </div>
@endif

<div class="container">
    <div class="row-md">
        <div class="col">
            <div class="card">  
                <div class="card-header border-1">
                    <h3 class="card-title">Update an account</h3>
                </div>
            <div class="card-body">
         <div class="d-flex">

    <form action="{{route ('customer.update',$customer->id)}}" class="col-md" method="POST">
        @csrf
        @method('PUT')
            <section id="cover">
                <div id="cover-caption" >
                    <div id="container">
                        <div class="col-sm-10 col-sm offset-1">
                            <h3 align ="center">  </h3>
                            <br>
             <div class="form-row">
                    <div class="col-6">
                        <label for="exampleInputPassword1">First Name</label>
                        
                        <input type="text" class="form-control shadow" id="exampleInputPassword1" placeholder="ex : Arno" name="fname" value="{{ $customer->fname }}">
                    </div>
                    

                    <div class="col-6">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control shadow" id="exampleInputPassword1" placeholder="ex : Dorian" name="lname" value="{{ $customer->lname }}">
                    </div>
            </div>
            <br>
                <div class="form-row">
                    <div class="col">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@email.com" name="email" value="{{ $customer->email }}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
            </div>
         <br>

         <div class="form-row">
            <div class="col-6">
               <label for="exampleInputPassword1">Phone No</label>
               <input type="text"  class="form-control shadow" id="exampleInputPassword1" placeholder="077 407 3997 "  value="{{ $customer->phoneno }}" name="phoneno">    
                </div>
           </div>
       <br>

            <div class="form-row">
                <div class="col-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control shadow" id="exampleInputPassword1" placeholder="********" name="password" value="{{ $customer->password }}">
                    <small id="emailHelp" class="form-text text-muted">Password should be longer than 8 characters.</small>
            </div>

            <div class="col-6">
                <label for="exampleInputPassword1">Re-type Password</label>
                <input type="password" class="form-control shadow" id="exampleInputPassword1" placeholder="********" name="retypepassword" value="{{ $customer->password }}">    
                 </div>
            </div>
            <br>

            
            <div class="form-group">
                <label class="radio-inline">
                <input type="radio" name="pNotifications" id="" value="yes" {{ ($customer->pNotifications=="yes")? "checked" : "" }}>Female</label>
                <label class="radio-inline">
                <input type="radio" name="pNotifications" id="" value="no" {{ ($customer->pNotifications=="no")? "checked" : "" }}>Other</label>
               </div>
            

                        <div class="form-group">
                            <div class="form-check">
                                <div class="text-right">
                                <input class="form-check-input shadow" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="ivalidCheck2">Agree to terms and conditions</label>
                            </div>
                        </div>
                    </div>                   
                <br>

        <div class="text-right">
            <button type="submit" class="btn btn-info btn-md shadow" value="Sign up" onclick="setTimeout(myFunction, 1000)">Submit</button>
            {{-- popup alert --}}
                {{-- <script>
                        function myFunction() {
                        alert('please enter your details');
                        }
                </script> --}}
            &nbsp    
            <button type="reset" class="btn btn-danger btn-md shadow" value="Clear">Clear</button> 
        </div>
                        </div>
                    </div>
                </div>
    </section>
    </form>
         </div>
            </div>
            </div>
        </div>
    </div>
</div>

    </body>
    </html>
    <br>

    @endsection
    

    