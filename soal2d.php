<!DOCTYPE html>
<html>
<head>
    <title>Tampilan No. 4</title>
</head>
<body>
    <h2>Tampilan No. 4</h2>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    ?>
    <p>Nama: <strong><?php echo htmlspecialchars($nama); ?></strong></p>
    <p>Alamat: <strong><?php echo htmlspecialchars($alamat); ?></strong></p>
    <p>Umur: <strong><?php echo htmlspecialchars($umur); ?></strong></p>
</body>
</html>
