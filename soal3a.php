<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'testdb');
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Proses pencarian
$where = '';
if (isset($_GET['search'])) {
    $nama = mysqli_real_escape_string($conn, $_GET['nama']);
    $alamat = mysqli_real_escape_string($conn, $_GET['alamat']);
    $hobi = mysqli_real_escape_string($conn, $_GET['hobi']);
    $whereArr = [];
    if ($nama) $whereArr[] = "person.nama LIKE '%$nama%'";
    if ($alamat) $whereArr[] = "person.alamat LIKE '%$alamat%'";
    if ($hobi) $whereArr[] = "hobi.hobi LIKE '%$hobi%'";
    if ($whereArr) $where = 'WHERE ' . implode(' OR ', $whereArr);
}

// Query data person dan hobinya
$sql = "SELECT person.id, person.nama, person.alamat, GROUP_CONCAT(hobi.hobi SEPARATOR ', ') as hobis
        FROM person LEFT JOIN hobi ON person.id = hobi.person_id
        $where
        GROUP BY person.id, person.nama, person.alamat";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>List Person & Hobi</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eee; }
        form { margin-top: 20px; }
    </style>
</head>
<body>
    <h2>Daftar Person & Hobinya</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['hobis']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <form method="get">
        <h3>Search Person</h3>
        Nama: <input type="text" name="nama" value="<?= isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : '' ?>">
        Alamat: <input type="text" name="alamat" value="<?= isset($_GET['alamat']) ? htmlspecialchars($_GET['alamat']) : '' ?>">
        Hobi: <input type="text" name="hobi" value="<?= isset($_GET['hobi']) ? htmlspecialchars($_GET['hobi']) : '' ?>">
        <button type="submit" name="search">SEARCH</button>
    </form>
</body>
</html>
<?php mysqli_close($conn); ?>
