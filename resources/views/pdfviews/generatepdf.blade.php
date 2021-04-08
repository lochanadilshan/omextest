<!DOCTYPE html>
<html lang="en">
<head >

    Your Header Content

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>

.page {
    header: page-header;
    footer: page-footer;
}

</style>
    
</head>

<body>

    <img src="C:\laragon\www\omexTechno\public\assets\img\desktop.png"  sizes="" >
    
    @foreach ($data as $item)
    {{$item->fname}}
    {{$item->lname}}
    {{$item->email}}
    {{$item->password}}
 
    @endforeach

   


   
</body>
</html>

