@extends('main')
@section('title','-All Posts')
@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-success">Create post</a>
	</div>
</div>
<hr>


<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td>{{$post->title}}</td>
						<td>{{ substr($post->body, 0,50) }}{{strlen($post->body)>50 ? "...":''}}</td>
						<td>{{date('D M j Y h:i a',strtotime($post->created_at)) }}</td>
						<td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default">View</a></td>
						<td><a href="{{route('posts.edit',$post->id) }}" class="btn btn-default">Edit</a></td>
					</tr>

				@endforeach
			</tbody>
		</table>
		<div class="text-centre">
			{!!$posts->links();!!}
		</div>
	</div>
</div>



@endsection