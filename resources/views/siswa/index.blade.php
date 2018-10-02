<html>
<head>
	<title>Belajar Laravel</title>
</head>
<body>
	<h2>List Siswa :</h2> || <a href="{{ url('siswa/create') }}">Add Student</a>
	<br>
	<table border="1">
		<thead>
			<td>Nama</td>
			<td>Umur</td>
			<td>Alamat</td>
			<td>Action</td>
		</thead>
		<tbody>
			@foreach($data as $siswa)
				<tr>
					<td>{{ $siswa->nama }}</td>
					<td>{{ $siswa->umur }}</td>
					<td>{{ $siswa->alamat }}</td>
					<td>
						<a href="{{ url('siswa/'.$siswa->id.'/edit') }}"><button>Edit</button></a>
						{{ Form::open(['method' => 'DELETE', 'route' => ['siswa.destroy', $siswa->id]]) }}
						{{ Form::submit('Delete') }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>