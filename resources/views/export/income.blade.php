<h1>table 1</h1>
<table>
    <tr><th>Fname</th> <th>Email</th> </tr>
    @foreach ($data as $item)
    <tr><td>{{$item->fname}}</td><td>{{$item->email}}</td></tr>
        
    @endforeach
</table>