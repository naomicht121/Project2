<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>

<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Edit Data Tabel Mahasiswa </h3> <br>

<?php echo form_open('siswa/edit');?>
<?php echo form_hidden('id_siswa',$datasiswa[0]->id_siswa);?>
<table>
<tr><td>ID Siswa</td><td><?php echo form_input('',$datasiswa[0]->id_siswa,"disabled");?></td></tr>
<tr><td>Nama Siswa</td><td><?php echo form_input('nama_siswa',$datasiswa[0]->nama_siswa);?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('siswa','Kembali');?></td></tr>
</table>


<?php
echo form_close();
?>

</body>
</html>
