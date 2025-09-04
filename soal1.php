<?php
$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--) {
    // Hitung total untuk row ini
    $total = 0;
    for ($b = $a; $b > 0; $b--) {
        $total += $b;
    }
    // Tampilkan total di atas row
    echo "<tr><td colspan='$a'><b>Total: $total</b></td></tr>\n";
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
?>
