<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>

<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Input Data Tabel Mahasiswa </h3> <br>

<?php echo form_open_multipart('siswa/create');?>
<table>
<tr><td>ID Siswa</td><td><?php echo form_input('id_siswa');?></td></tr>
<tr><td>Siswa</td><td><?php echo form_input('nama_siswa');?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('siswa','Kembali');?></td></tr>
</table>

<?php
echo form_close();
?>

</body>
</html>
