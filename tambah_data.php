<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="panggil_data.php" method="post">
  <h2>Form Registrasi</h2>
  <p>
    Nama Gedung  :
    <select name ="Gedung">
    <option value ="-pilih-">
    <option value ="Ciledug">Ciledug
    <option value ="Cekareng">Cekareng
</select>
<p>
<p>
    Nama Lantai :
    <select name ="Lantai">
    <option value ="-pilih-">
    <option value ="201">201
    <option value ="202">202
    <option value ="203">203
    
</select>
<p>
  <label for="KodeRuang">Kode Ruang:</label><br>
  <input type="text" id="KodeRuang" name="KodeRuang" required><br>
  <label for="NamaRuang">Nama Ruang:</label><br>
  <input type="text" id="NamaRuang" name="NamaRuang" required><br>
  <label for="keterangan">keterangan:</label><br>