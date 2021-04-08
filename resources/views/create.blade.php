
@extends('layouts.master')
@section('content')

@section('title','customer list')
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
                    <h3 class="card-title">Create an account</h3>
                </div>
            <div class="card-body">
         <div class="d-flex">

    <form action="{{route('customer.store')}} " class="col-md" method="POST">
        @csrf
            <section id="cover">
                <div id="cover-caption" >
                    <div id="container">
                        <div class="col-sm-10 col-sm offset-1">
                            <h3 align ="center">  </h3>
                            <br>
             <div class="form-row">
                    <div class="col-6">
                        <label for="fname">First Name</label>
                        
                        <input type="text" class="form-control shadow" id="fname" placeholder="Arno" name="fname" value="{{ old('fname') }}">
                    </div>
                    

                    <div class="col-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control shadow" id="lname" placeholder="Dorian" name="lname" value="{{ old('lname') }}">
                    </div>
            </div>
            <br>
                <div class="form-row">
                    <div class="col-12">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control shadow" id="email" aria-describedby="emailHelp" placeholder="abc@email.com" name="email" value="{{ old('email') }}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
            </div>
         <br>

         <div class="form-row">
         <div class="col-6">
            <label for="phoneno">Phone No</label>
            <input type="text"  class="form-control shadow" id="phoneno" placeholder="077 407 3997 "  value="{{ old('phoneno') }}" name="phoneno">    
             </div>
        </div>
    <br>

            <div class="form-row">
                <div class="col-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control shadow" id="password" placeholder="********" name="password">
                    <small id="emailHelp" class="form-text text-muted">Password should be longer than 8 characters.</small>
            </div>

            <div class="col-6">
                <label for="retypepassword">Re-type Password</label>
                <input type="password" class="form-control shadow" id="retypepassword" placeholder="********" name="retypepassword">    
                 </div>
            </div>
            <br>

            <label for="pNotifications">Would you like to recieve notifications about new item updates</label>
            <br>
            
            <label for="">Yes</label>
            <input type="radio" name="pNotifications" value="yes" id=""><br>
            
            <label for="">No</label>
            <input type="radio" name="pNotifications" value="no" id=""><br>
            
            

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
            <button type="submit" class="btn btn-info btn-md shadow" value="Sign up" onclick="setTimeout(myFunction, 1000)">Sign up</button>
            {{-- popup alert --}}
                <script>
                        function myFunction() {
                        alert('please enter your details');
                        }
                </script>
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

   