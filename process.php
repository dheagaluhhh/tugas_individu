<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    <h2>Form Processing</h2>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $jeniskel = $_POST['jeniskel'];
    $skills = isset($_POST['skill']) ? $_POST['skill'] : [];
    
    // Display submitted data
    echo "<p>Nama Anda: $nama</p>";
    echo "<p>Email Anda: $email</p>";
    echo "<p>Lokasi: $lokasi</p>";
    echo "<p>Jenis Kelamin: $jeniskel</p>";
    echo "<p>Skills:</p>";
    echo "<ul>";
    foreach ($skills as $skill) {
        echo "<li>$skill</li>";
    }
    echo "</ul>";
    // Collect form data

    ?>
</body>
</html>
