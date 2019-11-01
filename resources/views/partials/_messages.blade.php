@if (Session::has('success'))
<div class="alert alert-success">
	<strong>Success:</strong>{{Session::get('success')}}
</div>

@endif

@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
	<strong>Error(s)</strong>
	@foreach($errors->all() as $error)
	<ul>
		<li>{{$error}}</li>
	</ul>
	@endforeach
</div>
@endif