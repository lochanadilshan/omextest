@extends('customer')

@section('content')
    
<form action="{{route('pictureStore.store')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
    <label for="examplepicture">example picture input</label>
    <input type="file" class="form-control-file" name="image">
    <input type="submit" value="upload">
</div>
</form>
@endsection