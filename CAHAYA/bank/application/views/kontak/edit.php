<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Nilai</title>
<style scoped>

        .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

    </style>

</head>
<body>

<center>
<h1>SISTEM TERSEBAR</h1>
	<h3>Edit Data Tabel Nilai </h3> <br>

<?php echo form_open('nilai/edit');?>
<?php echo form_hidden('id_nilai',$datanilai[0]->id_nilai);?>
<table>
<tr><td>ID Nilai</td><td><?php echo form_input('',$datanilai[0]->id_nilai,"disabled");?></td></tr>
<tr><td>ID Matkul</td><td><?php echo form_input('id_matkul',$datanilai[0]->id_matkul);?></td></tr>
<tr><td>ID Siswa</td><td><?php echo form_input('id_siswa',$datanilai[0]->id_siswa);?></td></tr>
<tr><td>Nilai</td><td><?php echo form_input('nilai',$datanilai[0]->nilai);?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('nilai','Kembali');?></td></tr>
</table>


<?php
echo form_close();
?>

</body>
</html>

