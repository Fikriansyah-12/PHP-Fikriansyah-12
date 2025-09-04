<!DOCTYPE html>
<html>
<head>
    <title>Tampilan No. 3</title>
</head>
<body>
    <h2>Tampilan No. 3</h2>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    ?>
    <form method="post" action="soal2d.php">
        <input type="hidden" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <input type="hidden" name="alamat" value="<?php echo htmlspecialchars($alamat); ?>">
        Umur: <input type="number" name="umur" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
