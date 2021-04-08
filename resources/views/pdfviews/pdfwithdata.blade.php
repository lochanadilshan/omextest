
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> <center>PDF with Data</center> </h1>
        <div class="container">
    
            <table class="table table-bordered">
                <thead>
                    <tr><th>Brand</th><th>Logo</th></tr>
                </thead>
                <tbody>
                    
                    @foreach ($data as $car)
                   <tr> <td> {{ $car['name']}}</td><td><img src="{{ $car['logo']}}" alt="" width="50%"></td></tr>
                  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        
    </div>
    
</body>
</html>



