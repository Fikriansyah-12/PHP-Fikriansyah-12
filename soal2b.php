<!DOCTYPE html>
<html>
<head>
    <title>Tampilan No. 2</title>
</head>
<body>
    <h2>Tampilan No. 2</h2>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    ?>
    <form method="post" action="soal2c.php">
        <input type="hidden" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        Alamat: <input type="text" name="alamat" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
