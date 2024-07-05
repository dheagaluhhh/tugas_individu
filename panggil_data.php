<!DOCTYPE html>
<html>
<head>
</head>
<title> Data Mahasiswa </title>
<body>
<?php
$Gedung = $_POST['Gedung'];
$Lantai = $_POST['Lantai'];
$KodeRuang = $_POST["KodeRuang"];
$NamaRuang = $_POST["NamaRuang"];
$keterangan = $_POST['keterangan'];


?>
<table border="1" bgcolor="Cyan">
<tr>
<td colspan="2" align="center"><b>Data Mahasiswa</b></td>
</tr>
<tr>
<td>Gedung</td><td><?php echo $Gedung; ?></td>
</tr>
<tr>
<td>Lantai</td><td><?php echo $Lantai; ?></td>
</tr>
<tr>
<td>KodeRuang</td><td><?php echo $KodeRuang; ?></td>
</tr>
<tr>
<td>NamaRuang</td><td><?php echo $NamaRuang; ?></td>
</tr>
<tr>
<td>keterangan</td><td><?php echo $keterangan; ?></td>
</tr>
</table>
<a href="Tambah_data.php">INPUT DATA LAGI</a>
</body>
</html>