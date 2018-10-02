<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<h2>Update Data :</h2>
	{{ Form::open(['method'=>'PATCH','route'=>['siswa.update', $siswa->id]]) }}
		<p>Nama : <input type="text" name="name" value="{{ $siswa->nama }}"> </p>
		<p>Umur : <input type="text" name="age" value="{{ $siswa->umur }}"> </p>
		<p>Alamat : <input type="text" name="address" value="{{ $siswa->alamat }}"> </p>
	{{ Form::submit('Update') }}
	{{ Form::close() }}
</body>
</html>