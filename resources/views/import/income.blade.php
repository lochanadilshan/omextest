<h1>immport data</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<form action="{{route('import.income')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="file">Upload file</label>
<input type="file" name="file" >
<button class="btn btn-primary" type="submit">import</button>
</form>