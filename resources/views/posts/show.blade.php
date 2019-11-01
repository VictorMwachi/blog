@extends('main')

@section('title','-Just posted')
@section('content')


<div class="row">
    <div class="col-md-8">
        <div class="jumbotron">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body}}</p>
            <p><a  class="btn btn-primary btn-lg" role="button" href="">POPULAR POSTS</a></p>
        </div>
    </div>
    <div class="col-md-4">
    	<div class="well">
        		<dl class="dl-horizontal">
        			<dt>Created At:</dt>
        			<dd>{{date('D M j Y h:i a',strtotime($post->created_at)) }}</dd>
        		</dl>
        		<dl class="dl-horizontal">
        			<dt>Last Updated:</dt>
        			<dd>{{date('D M j Y h:i a',strtotime($post->updated_at))}}</dd>
        		</dl>
        		<hr>
        		<div class="row">
        			<div class="col-sm-6">
        				{!!Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary'))!!}
        			</div>
        			<div class="col-sm-6">

                        {!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}

        			</div>
                    <div class="row">
                        <br>
                        <div class="col-sm-12">
                            {!!Html::linkRoute('posts.index','<< See All Posts',array($post->id),array('class'=>'btn btn-success btn-block'))!!}
                            </div>
                    </div>
        		</div>

        	</div>
    </div>
</div>








@endsection