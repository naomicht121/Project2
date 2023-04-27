<!DOCTYPE html>
<html>
<head>
	<title>Input Data Matkul</title>
</head>
<body>

<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Input Data Tabel Matakuliah </h3> <br>

<?php echo form_open_multipart('matkul/create');?>
<table>
<tr><td>ID Matkul</td><td><?php echo form_input('id_matkul');?></td></tr>
<tr><td>Matkul</td><td><?php echo form_input('nama_matkul');?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('matkul','Kembali');?></td></tr>
</table>

<?php
echo form_close();
?>

</body>
</html>
