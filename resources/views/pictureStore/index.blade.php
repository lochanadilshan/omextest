<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Image</th>
    <th width="250px">Action</th>
</tr>
@foreach ($images as $image)
    <tr>
    <td>{{ $image->id }}</td>
    <td><img src="{{ asset("storage/images/$image->image")}}" height="60px" width="60px"></td>
    <td>
    <form action="{{ route('pictureStore.destroy' ,$image->id)}}" method="post">
    <a class="btn btn-info"href="#"></a>
        @csrf
    @method('DELETE')
    <button type="submit"></button>
</form>
</td>

</tr>
@endforeach
</table>