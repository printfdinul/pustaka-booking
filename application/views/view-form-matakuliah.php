<!DOCTYPE html>
<html>
<head>
	<title>Form Input Matakuliah</title>
</head>
<body>
<center>
	<form action="<?php= base_url('matakuliah/cetak');  ?>" method="post">
		<table>
			<tr>
				<th colspan="3">
					Form Input Data Matakuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
				</td>
			</tr>
			<tr>
				<th>Kode MTK</th>
				<th>:</th>
				<td>
					<input type="text" name="kode" id="Kode">
				</td>
			</tr>
			<tr>
				<th>Nama MTK</th>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="Nama">
				</td>
			</tr>
			<tr>
				<th>SKS</th>
				<td>:</td>
				<td>
					<select name="sks" id="Sks">
						<option value="">PILIH SKS</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>