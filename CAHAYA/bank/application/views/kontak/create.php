<!DOCTYPE html>
<html>
<head>
	<title>Input Data Nilai</title>
</head>
<body>


<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Input Data Tabel Nilai </h3> <br>

	<?php echo form_open_multipart('nilai/create');?>
<table>
<tr><td>ID Nilai</td><td><?php echo form_input('id_nilai');?></td></tr>
<tr><td>ID Matkul</td><td><?php echo form_input('id_matkul');?></td></tr>
<tr><td>ID Siswa</td><td><?php echo form_input('id_siswa');?></td></tr>
<tr><td>Nilai</td><td><?php echo form_input('nilai');?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('nilai','Kembali');?></td></tr>
</table>

<?php
echo form_close();
?>

</body>
</html>
