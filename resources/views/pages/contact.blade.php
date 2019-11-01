
@extends('main')

@section('title','-Contact')
@section('content')

        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<h1>contact me</h1>
        			<form data-parsley-validate="">
        				<div class="form-group">
        					<label name="email">email</label>
        					<input id="email" name="email" class="form-control" required="">
        				</div>

        				<div class="form-group">
        					<label name="subject">subject</label>
        					<input id="subject" name="subject" class="form-control" required="">
        				</div>
        				<div class="form-group">
        					<label name="message">message</label>
        					<textarea id="message" name="message" class="form-control">Type here</textarea>
        				</div>
        				<input type="submit" value="Send message" class="btn btn-success" required="">
        			</form>
        		</div>
        	</div>
        </div>
@endsection