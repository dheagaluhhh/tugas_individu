<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <div>
        <label for="fname">Nama Anda : </label>
        <input type="text" id="fname" name="nama">
        <div>
        <label for="lname">Email Anda : </label>
        <input type="text" id="lname" name="email">
        </div>
        <div>
        <label for="location">Pilih Lokasi : </label>
        <select id="location" name="lokasi">
            <option value="Bandung">Bandung</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Aceh">Aceh</option>
            <option value="Papua">Papua</option>
        </select>
        </div>
        <div>
            <input type="radio" id="html" name="jeniskel" value="Laki-Laki">
              <label for="html">Laki-Laki</label>
              <input type="radio" id="css" name="jeniskel" value="Perempuan">
              <label for="css">Perempuan</label>
        </div>
        <div>
            <input type="checkbox" id="vehicle1" name="skill[]" value="HTML">
      <label for="vehicle1">HTML</label><br>
      <input type="checkbox" id="vehicle2" name="skill[]" value="PHP">
      <label for="vehicle2">PHP</label><br>
      <input type="checkbox" id="vehicle3" name="skill[]" value="JAVASCRIPT">
      <label for="vehicle3">JAVASCRIPT</label><br>
      <input type="checkbox" id="vehicle3" name="skill[]" value="CSS">
      <label for="vehicle3">CSS</label><br>
      <input type="checkbox" id="vehicle3" name="skill[]" value="MySql">
      <label for="vehicle3">MySql</label><br>
        </div>
        <div>
        <input type="submit" value="Submit">
        </div>

        
    
        

       
    </form> 
</body>
</html>