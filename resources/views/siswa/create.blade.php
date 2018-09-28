<html>
<head>
	<title>Belajar Laravel</title>
</head>
<body>
	<h2>Add Students</h2>
	{{ Form::open(['method' => 'POST', 'route' => ['siswa.store']]) }}
	<p>Name : <input type="text" name="name"></p>
	</br>
	<p>Umur : <input type="text" name="age"></p>
	</br>
	<p>Alamat : <input type="text" name="address"></p>
	</br>
	{{ Form::submit('tambah') }}
	{{ Form::close() }}
</body>
</html>