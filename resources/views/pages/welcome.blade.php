
@extends('main')

@section('title','-Home')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Welcome to my blog</h1>
            <p class="lead">Welcome to my blog.Thank you for visiting.This is myfirst test web with laravel</p>
            <p><a  class="btn btn-primary btn-lg" role="button" href="">POPULAR POSTS</a></p>
        </div>
    </div>
</div>


<div class="row">
<div class="col-md-8">
    @foreach($posts as $post)
    <div class="Post">
        <h2>{{$post->title}}</h2>
    <p>{{ substr($post->body,0, 300) }}{{ strlen($post->body)>300? "...": "" }}</p>
    <a class="btn btn-primary" href="#">Readmore</a>
    
    </div>

    <hr>
    @endforeach

    
    
</div>
<div class="col-md-3  col-md-offset-1">
    <div class="sidebar">
        <h2>sidebar</h2>
    </div>
    <p>Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.</p>
</div>
</div>
</div>
@endsection