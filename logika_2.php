<?php
// Array menu makanan dan harga
$menu_makanan = array(
    array("nama" => "Nasi Goreng", "harga" => 10000),
    array("nama" => "Ayam Bakar", "harga" => 20000),
    array("nama" => "Mie Goreng", "harga" => 5000),
    array("nama" => "Sate Ayam", "harga" => 21000)
);

// Menampilkan daftar menu makanan
echo "Daftar Menu Makanan:<br>";
foreach ($menu_makanan as $menu) {
    echo $menu["nama"] . " - Rp " . $menu["harga"] . "<br>";
}

// Input pesanan
$pesanan = array("Nasi Goreng", "Ayam Bakar", "Mie Goreng");

// Menghitung total harga pesanan
$total_harga = 0;
foreach ($pesanan as $nama_pesanan) {
    foreach ($menu_makanan as $menu) {
        if ($menu["nama"] === $nama_pesanan) {
            $total_harga += $menu["harga"];
            break;
        }
    }
}

// Menampilkan total harga pesanan
echo "<br>Total Harga Pesanan: Rp " . $total_harga;
?>