<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Matakuliah</title>
</head>
<body>

<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Edit Data Tabel Matakuliah </h3> <br>


<?php echo form_open('matkul/edit');?>
<?php echo form_hidden('id_matkul',$datamatkul[0]->id_matkul);?>
<table>
<tr><td>ID Matkul</td><td><?php echo form_input('',$datamatkul[0]->id_matkul,"disabled");?></td></tr>
<tr><td>Matkul</td><td><?php echo form_input('nama_matkul',$datamatkul[0]->nama_matkul);?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('matkul','Kembali');?></td></tr>
</table>


<?php
echo form_close();
?>

</body>
</html>

