@extends('main')
@section('title','- $post->title')
@section('content')

<div class="row">
	<div class=" offset-2 col-md-8">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
	</div>
</div>


@endsection