<?php
$saldo = $_POST['saldo'];
$bulan = $_POST['bulan'];

for($i = 1; $i <= $bulan; $i++){
    // Tentukan bunga
    if($saldo < 1100000){
        $bunga = 0.03;
    } else {
        $bunga = 0.04;
    }

    // Hitung saldo per bulan
    $saldo = $saldo + ($saldo * $bunga) - 9000;
}

echo "Saldo akhir setelah $bulan bulan adalah Rp " . number_format($saldo, 0, ',', '.');
?>
