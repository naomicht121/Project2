<!DOCTYPE html>
<html>
<head>
	<title>Tabel Nilai</title>
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



<style type="text/css">
	.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
<center>
<h1>SISTEM TERSEBAR</h1>
	<h3> Tabel Nilai </h3> <br>
<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table class="table1">
<tr><th>ID</th><th>ID Matkul</th><th>ID Siswa</th><th>Nilai</th><th>Action</th></tr>
<?php 
foreach ($datanilai as $dosen){ 
echo "<tr> 
<td>$dosen->id_nilai</td> 
<td>$dosen->id_matkul</td> 
<td>$dosen->id_siswa</td> 
<td>$dosen->nilai</td> 
<td>".anchor('nilai/edit/'.$dosen->id_nilai,'Edit')." 
".anchor('nilai/delete/'.$dosen->id_nilai,'Delete')."</td> 
</tr>"; 
} 
?>
</table>
 <br>
<form action="http://localhost/ci_client/index.php/nilai/create">
	<button class="button-success pure-button">Tambah Data Nilai</button>
</form> <br>
<form action="http://localhost/ci_client/index.php/matkul">
	<button class="button-warning pure-button">Tampil Data Matakuliah</button>
</form><br>
<form action="http://localhost/ci_client/index.php/siswa">
	<button class="button-secondary pure-button">Tampil Data Mahasiswa</button>
</form>
</center>
</body>
</html>

