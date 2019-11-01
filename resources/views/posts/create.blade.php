@extends('main')

@section('title','-Create new Post')

@section('stylesheet')
{!!Html::style('css/parsley.css')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create new post</h1>
		<hr>
		{!!Form::open(array('route'=>'posts.store','data-parsley-validate'=>'')) !!}
		{{Form::label('title','Title:') }}
		{{Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }}
		{{Form::label('slug','Slug:')}}
		{{Form::text('slug',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}	

		{{Form::label('body','Post body:') }}
		{{Form::textarea('body',null,array('class'=>'form-control','required'=>'')) }}

		{{ Form::submit('Create post',array('class'=>'btn btn-success btn-lg','style'=>'margin-top:20px;')) }}
		{!! Form::close() !!}
	
	</div>
	
</div>

@endsection

@section('scripts')

{!!Html::script('js/parsley.min.js')!!}


@endsection