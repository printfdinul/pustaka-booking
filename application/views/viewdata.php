<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Matakuliah</title>
</head>
<body>
<center>
	<table> 
	<tr>
		<th colspan="3"> Tampil Data Mata Kuliah</th> 
	</tr> 
	<tr> <td colspan="3"> <hr> </td> 
	</tr> <tr> <th align="left">Kode MTK</th> 
		    <th>:</th> 
		<td><?php= $kode; ?> </td> </tr> 
		<tr><td>Nama MTK</td> 
		    <td>:</td> 
		<td><?php= $nama; ?> </td> </tr> 
		<tr> <td>SKS</td> 
			<td>:</td> 
		<td><?php= $sks; ?> </td> </tr>
		<tr>
			<td colspan="3" align="center"> 
				<a href="<?php= base_url('matakuliah'); ?>">Kembali</a></button> 
			</td>
			 </tr> 
	</table> 
</center>
</body>
</html>