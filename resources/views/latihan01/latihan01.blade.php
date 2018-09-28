<!DOCTYPE html>
<html>
<head>
	<title>Belajar Laravel | {{ $title }}</title>
</head>
<body>
	<ul>
		@section('sidebar')
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>
		@show
	</ul>
	<div class="container">
		{{ $content }}
	</div>
</body>
</html>