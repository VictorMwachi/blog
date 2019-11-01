<!doctype html>
<html lang="en">
<head>
	@include('partials._header')

</head>
<body>
	@include('partials._nav')

		<br>
		<br>
		<br>

	<div class="container">

		@include('partials._messages')
		@yield('content')

		@include('partials._footer')

	</div>
	@include('partials._scripts')
	@yield('scripts')

</body>
</html>
