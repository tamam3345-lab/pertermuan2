<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
<button>
    <input type="submit" value="Home">
    <input type="reset" value="Select">
    <input type="reset" value="Select Like">
    <input type="reset" value="Select Join">
    <input type="reset" value="Select Like & Join">
<center>
	<h3>Data Anggota</h3>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>No Telpon</th>
		</tr>
		@foreach($anggota as $a)
		<tr>
			<td>{{ $a->anggota_nama }}</td>
			<td>{{ $a->anggota_alamat }}</td>
			<td>{{ $a->anggota_jk }}</td>
			<td>{{ $a->anggota_telp }}</td>
		</tr>
		@endforeach
	</table>
    </center>
 
</body>
</html>